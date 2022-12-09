<?php

use Illuminate\Support\Facades\Broadcast;

/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Here you may register all of the event broadcasting channels that your
| application supports. The given channel authorization callbacks are
| used to check if an authenticated user can listen to the channel.
|
*/

Broadcast::channel('App.Models.User.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});


// Broadcast::channel('test', function () {
//     // return (int) $user->id === (int) $id;
//     return response()->json([
//         'succ'=>1,
//         'msg'=>'Successfully'
//     ]);
// });

// Broadcast::channel('startMessage',function(){
//         return ['hello'=>'hello world'];
// });

// Broadcast::channel('channel-message', function($message){
//         return $message;
// });
// Broadcast::channel('channel-message', \App\Events\TestEvent::class);

