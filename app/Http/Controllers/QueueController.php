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
        $queuelistDuration = $queue->getQueuePlayTime();
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
        return redirect('/queue');
    }
    public function createPlaylist() {
        $queue = new Queue();
        $queuelist = $queue->getQueue();
        return redirect('/queue');
   }
}


