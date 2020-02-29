<template>
    <div
        class="flex items-center justify-between h-24 px-5 py-5 bg-gray-100 opacity-75"
    >
        <div v-if="currentTrack !== null" class="flex items-center w-1/4 mx-5">
            <div class="w-16 h-16 mr-5 border-2 border-white rounded-lg">
                <img
                    class="w-full h-full rounded-lg object-cover object-center"
                    :src="currentTrack.thumbnail_url"
                />
            </div>
            <div>
                <h2
                    class="text-gray-900 leading-none font-bold"
                    v-text="currentTrack.title"
                />
                <p class="text-sm" v-text="currentTrack.artist.name" />
            </div>
        </div>
        <div class="w-2/4 mx-5">
            <div class="flex items-center justify-center">
                <button class="p-nav --prev flex w-5 h-5">
                    <div></div>
                    <div></div>
                </button>
                <button
                    class="p-toggle flex items-center justify-center w-10 h-10 mx-5 rounded-full bg-indigo border-2 border-white"
                    :class="playing ? '--playing' : '--paused'"
                    @click="toggle"
                >
                    <div></div>
                    <div></div>
                </button>
                <button
                    :disabled="nextTrack === null"
                    class="p-nav --next flex w-5 h-5"
                    @click="playNext"
                >
                    <div></div>
                    <div></div>
                </button>
            </div>
            <div class="flex items-center">
                <p class="mr-2 text-sm font-bold">0:00</p>
                <div class="w-full h-1 bg-indigo rounded-sm"></div>
                <p class="ml-2 text-sm font-bold">4:10</p>
            </div>
        </div>
        <div class="w-1/4 mx-5">
            <h2 class="text-gray-600">UP NEXT</h2>
            <p
                v-if="nextTrack !== null"
                class="text-sm font-bold"
                v-text="nextTrack.title + ' - ' + nextTrack.artist.name"
            />
            <p v-else v-text="'-'" />
        </div>
    </div>
</template>

<script>
import 'styles/player.css'

export default {
    data() {
        return {
            playing: false,
            currentTrack: {
                id: 1,
                title: 'Old Town Road',
                thumbnail_url: '/storage/8/abstract.jpeg',
                artist: {
                    id: 1,
                    name: 'Lil Nas X Billy Ray Cyrus',
                },
            },
            nextTrack: {
                id: 2,
                title: 'Sandali',
                thumbnail_url: '/storage/4/abstract.jpeg',
                artist: {
                    id: 2,
                    name: 'Lyndon Montera',
                },
            },
        }
    },
    methods: {
        toggle() {
            this.playing = !this.playing
        },
        playNext() {
            this.currentTrack = this.nextTrack
            this.nextTrack = null
        },
    },
}
</script>
