<?php
namespace App;


use Illuminate\Support\Facades\Session;
use App\Models\Playlist;
class Queue
{
    /**
     * Returns a queuelist
     * @return array $queuelist
     */
    public function getQueue(): array
    {
        $queuelist = Session::get('playlist');
        if ($queuelist == null) {
            $queuelist = [];
        }

        return ($queuelist);
    }

    /**
     * Returns a queuelist but added 1 item from queuelist.
     * @return array $queuelist
     */
    public function pushSongToQueue($song): array
    {
        Session::push('playlist', $song);
        $queuelist = Session::get('playlist');

//        $QueuelistDuration = getQueuePlayTime();
        return ($queuelist);
    }

    /**
     * Returns total duration of all songs in the queue.
     * @return string $queuelistTimeInTimeFormat
     */
    public function getQueuePlayTime()
    {
        $queuelistTime = 0;
        $queuelist = Session::get('playlist');
        if ($queuelist == null) {
            $queuelist = [];
        }

        foreach ($queuelist as $song) {
            $queuelistTime = $queuelistTime + $song->duration;
        }
        $seconds = $queuelistTime;
        $queuelistTimeInTimeFormat = sprintf('%02d:%02d:%02d', ($seconds / 3600), ($seconds / 60 % 60), $seconds % 60);

        return ($queuelistTimeInTimeFormat);
    }

    /**
     * Returns a empty queuelist
     * @return array $queuelist
     */
    public function deleteQueue(): array
    {
        Session::flush();
        $queuelist = [];

        return ($queuelist);
    }

    /**
     * Returns a queuelist but delete 1 item from queuelist
     * @return array $queuelist
     */
    public function deleteQueueItem($queuelistNumber): array
    {
        $queuelist = Session::get('playlist');
        if ($queuelist == null) {
            $queuelist = [];
        }
        unset($queuelist[$queuelistNumber]);
        Session::put('playlist', $queuelist);

        return ($queuelist);
    }

    public function createPlaylist()
    {
    }

    public function storePlaylist($queuelist)
    {
        $songIds = collect();
        foreach ($queuelist as $song) {
            $songIds->push($song->id);
        }
        $playlist = Playlist::create([
            'title' => $_GET['title']
        ]);
        $playlist->songs()->syncWithoutDetaching($songIds);
    }
}