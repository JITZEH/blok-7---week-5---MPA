<?php

namespace App\Http\Controllers;

use App\Models\Song;
use App\Models\Playlist;
use App\Queue;

class QueueController extends Controller {

    /**
     * returns a array of queuelist
     * @return array $queuelist;
     * @return string $queuelistDuration
     *
     */
   public function index() {
        $queue = new Queue();
        $queuelist = $queue->getQueue();
        $queuelistTime = 0;
        foreach ($queuelist as $song) {
           $queuelistTime = $queuelistTime + $song->duration;
        }
        $seconds = $queuelistTime;
        $queuelistDuration = sprintf('%02d:%02d:%02d', ($seconds / 3600), ($seconds / 60 % 60), $seconds % 60);

       return view('queue', compact('queuelist', 'queuelistDuration'));
   }

    public function push(Song $song) {
       $queue = new Queue();
       $queuelist = $queue->pushSongToQueue($song);
        return redirect('/queue');
    }
    public function deleteQueueItem($queuelistNumber) {
        $queue = new Queue();
        $queuelist = $queue->deleteQueueItem($queuelistNumber);
        return redirect('/queue');
   }
    public function clearQueue() {
        $queue = new Queue();
        $queuelist = $queue->deleteQueue();
        return redirect('/queue');
    }
    public function storePlaylist() {
        $queue = new Queue();
        $queuelist = $queue->getQueue();
        $queue->storePlaylist($queuelist);
        $queuelistDuration = '00:00:00';
        $queuelist = []; // moet nog weg
        return redirect('/playlists');
    }
    public function createPlaylist() {
        $queue = new Queue();
        $queuelist = $queue->getQueue();
        $queuelistDuration = '00:00:00';
//        return redirect('/queue');
        return view('createplaylist', compact('queuelist', 'queuelistDuration'));
   }
}


