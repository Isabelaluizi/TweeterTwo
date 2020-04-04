<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

class feedController extends Controller

{
    function showTweets () {
        if (Auth::check()) {
        $tweets= \App\Tweet::orderBy("created_at", "desc")->paginate(10);
        $checkLikes =\App\Like::all();
            $tweetInfo=[];
            foreach($tweets as $tweet) {
                $likes=\App\Like::where("tweet_id","$tweet->id")->get();
                $comments=\App\Comment::where("tweet_id","$tweet->id")->get();
                $gifcomments=\App\Comment::where("tweet_id","$tweet->id")->get();
                $numLikes=count($likes);
                $numComments=count($comments)+ count($gifcomments);
                $userId=$tweet->user_id;
                array_push ($tweetInfo,[
                    "userId"=> "$userId",
                    "tweetId"=> "$tweet->id",
                    "name"=> \App\User::find($userId)->name,
                    "content" =>"$tweet->content",
                    "created_at" =>"$tweet->created_at",
                    "numLikes" => "$numLikes",
                    "numComments" => "$numComments"
                ]);
            }
            return view('readTweets', ['tweets' =>$tweets], ['tweetsInfo'=>$tweetInfo],['checkLikes'=>$checkLikes]);
         } else {
            return redirect('home');
         }
    }
    function commentForm (Request $request) {
        $tweet=\App\Tweet::find($request->tweetId);
        $userId=$tweet->user_id;
        $userName=\App\User::find($userId)->name;
        return view('commentForm', ['tweet'=>$tweet],['username'=>$userName]);
    }
    function commentTweet (Request $request) {
        $tweet=\App\Tweet::find($request->tweetId);
        $comment = new \App\Comment;
        $comment->user_id = Auth::user()->id;
        $comment->tweet_id = $request->tweetId;
        $comment->content = $request->content;
        $comment->save();
        return redirect ('readTweets');
    }
    function showComments ($tweetId) {
        $tweet= \App\Tweet::find($tweetId);
        $count= \App\Tweet::where('id',$tweetId)->get();
        if(count($count)==0) {
            abort(403, 'Page not found');
        }else {
        $comments= \App\Comment::where('tweet_id',"$tweetId")->orderBy("created_at", "desc")->get();
        $gifcomments= \App\Gifcomment::where('tweet_id',"$tweetId")->orderBy("created_at", "desc")->get();
        $tweetInfo = [
            "userId"=> "$tweet->user_id",
            "tweetId"=> "$tweet->id",
            "name"=> \App\User::find($tweet->user_id)->name,
            "content" =>"$tweet->content",
            "created_at" =>"$tweet->created_at",
        ];
        $commentsInfo=[];
        foreach($comments as $comment) {
            foreach($gifcomments as $gifcomment) {
                if($gifcomment->created_at >= $comment->created_at) {
                array_push ($commentsInfo, [
                    "commentId" => "$gifcomment->id",
                    "commentuserId" => "$gifcomment->user_id",
                    "name" => \App\User::find($gifcomment->user_id)->name,
                    "comment" => null,
                    "commenturl" => "$gifcomment->url",
                    "created_at" => "$gifcomment->created_at"]);
                    unset($gifcomment->id);
                    unset($gifcomment->user_id);
                    unset($gifcomment->tweet_id);
                    unset($gifcomment->url);
                    unset($gifcomment->created_at);
                    unset($gifcomment->updated_at);
                }
            }
            array_push ($commentsInfo, [
                "commentId" => "$comment->id",
                "commentuserId" => "$comment->user_id",
                "name" => \App\User::find($comment->user_id)->name,
                "comment" => "$comment->content",
                "commenturl" => null,
                "created_at" => "$comment->created_at"]);
        }
    }
        return view ('showTweetInfo', ['tweetInfo'=>$tweetInfo], ['commentsInfo'=>$commentsInfo]);
    }
    function confirmDeleteComment (Request $request) {
        return view('confirmDeleteComment', ['ids'=>$request]);
    }
    function confirmDeleteGif (Request $request) {
        return view ('confirmDeleteGif',  ['ids'=>$request]);
    }
    function deleteComment (Request $request) {
        if($request->option=="yes") {
        \App\Comment::destroy($request->commentId);
        }
        return redirect ("/readTweets/$request->tweetId");
    }
    function deleteCommentGif (Request $request) {
        if($request->option=="yes") {
            \App\Gifcomment::destroy($request->commentIdGif);
            }
            return redirect ("/readTweets/$request->tweetId");
    }
    function editCommentForm (Request $request) {
        $comment=\App\Comment::find($request->commentId);
        return view ('editCommentForm', ['comment'=>$comment]);
    }
    function editComment (Request $request) {
        $comment=\App\Comment::find($request->commentId);
            $comment->content = $request->comment;
            $comment->created_at = $request->created_at;
            $comment->save();
            return redirect ("/readTweets/$request->tweetId");
    }
    function addLike (Request $request) {
        $tweetsLiked=\App\Like::where('tweet_id',"$request->tweetId")->where('user_id',Auth::user()->id)->get();
        if(sizeOf($tweetsLiked) == 0) {
            $like = new \App\Like;
            $like->user_id = Auth::user()->id;
            $like->tweet_id = $request->tweetId;
            $like->save();
            $liked=true;
        } else {
            foreach($tweetsLiked as $tweetLiked) {
            \App\Like::destroy($tweetLiked->id);
            }
            $liked=false;
        }
        return response()->json($liked);
    }
    function checkUserLiked (Request $request) {
        $tweetsLiked=\App\Like::where('tweet_id',"$request->tweetId")->where('user_id',Auth::user()->id)->get();
        if(sizeOf($tweetsLiked) == 0) {
            $alreadyliked=false;
        } else {
            $alreadyliked=true;
        }
        return response()->json($alreadyliked);
    }
    function addGifComment (Request $request) {
        $gifComment = new \App\Gifcomment;
        $gifComment->user_id = Auth::user()->id;
        $gifComment->tweet_id = $request->tweetId;
        $gifComment->url = $request->url;
        $gifComment->save();
        return response()->json("readTweets/$request->tweetId");
    }




    // function deleteLike (Request $request) {
    //     $likes=\App\Like::where('user_id',Auth::user()->id)->where('tweet_id',$request->tweetId)->get();
    //     foreach($likes as $like) {
    //         \App\Like::destroy($like
    //         ->id);
    //     }
    //     return redirect ('readTweets');
    // }


}
