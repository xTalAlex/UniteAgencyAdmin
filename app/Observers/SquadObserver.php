<?php

namespace App\Observers;

use App\Models\Squad;

class SquadObserver
{
    /**
     * Handle the Squad "created" event.
     *
     * @param  \App\Models\Squad  $squad
     * @return void
     */
    public function created(Squad $squad)
    {
        //
    }

    /**
     * Handle the Squad "updated" event.
     *
     * @param  \App\Models\Squad  $squad
     * @return void
     */
    public function updated(Squad $squad)
    {
        //
    }

    /**
     * Handle the Squad "deleted" event.
     *
     * @param  \App\Models\Squad  $squad
     * @return void
     */
    public function deleted(Squad $squad)
    {
        //
    }

    /**
     * Handle the Squad "restored" event.
     *
     * @param  \App\Models\Squad  $squad
     * @return void
     */
    public function restored(Squad $squad)
    {
        //
    }

    /**
     * Handle the Squad "force deleted" event.
     *
     * @param  \App\Models\Squad  $squad
     * @return void
     */
    public function forceDeleted(Squad $squad)
    {
        //
    }
}
