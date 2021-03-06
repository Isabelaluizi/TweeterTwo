<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
$proxy_url    = getenv('PROXY_URL');
$proxy_schema = getenv('PROXY_SCHEMA');

if (!empty($proxy_url)) {
   URL::forceRootUrl($proxy_url);
}

if (!empty($proxy_schema)) {
   URL::forceScheme($proxy_schema);
}

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/userProfile', 'userController@showProfile');
Route::get('/editProfile', 'userController@showProfileEdit');
Route::post('/editProfile', 'userController@showProfileEdit');
Route::post('/updateProfile', 'userController@updateProfile');
Route::post('/confirmDeleteProfile', 'userController@confirmDeleteProfile');
Route::post('/deleteProfile', 'userController@deleteProfile');
Route::post('/confirmDelete', 'userController@confirmDelete'); //is confirming if the user wants to delete
Route::post('/deleteTweet', 'userController@deleteTweet'); //is deleting a tweet if the user confirmed
Route::post('/searchUser', 'followController@searchUser');
Route::post('/findUsers','followController@showUsers'); // when an user click in find user, this route goes to show all users
Route::get('/findUsers','followController@showUsers');
Route::post('/followUser','followController@changeFollow'); // is creating relationship between the users (follow or unfollow)
Route::post('/createForm', 'userController@createForm'); // form to create a new tweet
Route::post('/createTweet', 'userController@createTweet'); // create a new tweet
Route::post('/editForm','userController@editForm'); // form tweet
Route::post('/editTweet','userController@editTweet');// create a existed tweet
Route::get('/readTweets','feedController@showTweets'); //page to read all tweets but yours
Route::post('/commentForm','feedController@commentForm'); // page to comment one tweet - form
Route::post('/commentTweet', 'feedController@commentTweet'); // add comment on database
Route::get('/readTweets/{tweetId}', 'feedController@showComments'); //show tweet and comments related to tweet
Route::post('/confirmDeleteComment','feedController@confirmDeleteComment'); //Is confirming to delete a comment
Route::post('/confirmDeleteGif','feedController@confirmDeleteGif'); //Is confirming to delete a gif
Route::post('deleteComment', 'feedController@deleteComment'); //is deleting a comment
Route::post('deleteCommentGif', 'feedController@deleteCommentGif'); //is deleting a gif
Route::post('/editCommentForm','feedController@editCommentForm'); //showing edit form
Route::post('/editComment','feedController@editComment'); //update comment
Route::get('/checkUserLogin', 'userController@isUserLoggedinAPI'); //checking if user is logged in
Route::post('/APIcheckLike','feedController@checkUserLiked'); //check if tweet has already been liked
Route::post('/checkUserLiked','feedController@addLike'); //adding or deleting like
Route::post('/fillDB','feedController@addGifComment'); //adding gif comment on database
Route::post('/APInestedComment', 'feedController@addNestedComment'); //adding nested comment on database
Route::post('/APIGetNestedComment','feedController@getNestedComment'); //getting nested comment on database to ShowCommentsVue
Route::post('/APICheckUserId','userController@isUser');//checking if the nested comment belongs to user
Route::post('/APIdeleteNestedComment','feedController@deleteNestedComment'); //is passing nested Comment Id and deleting it
