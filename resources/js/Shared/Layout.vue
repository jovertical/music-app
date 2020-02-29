<template>
    <div class="flex flex-wrap relative min-h-screen">
        <div
            class="w-1/5 bg-cream hidden lg:flex flex-col flex-no-wrap px-12 pt-16"
        >
            <div class="mb-10">
                <h2 class="mb-4 text-gray-600 font-bold">MY MUSIC</h2>
                <ul class="flex flex-col">
                    <li class="mb-4">
                        <inertia-link
                            :href="$route('welcome')"
                            class="inline-flex"
                        >
                            <icon
                                class="w-6 h-6 mr-3 text-gray-600"
                                name="clock"
                            />
                            <p class="text-gray-900">Recently Played</p>
                        </inertia-link>
                    </li>
                    <li>
                        <inertia-link
                            :href="$route('welcome')"
                            class="inline-flex"
                        >
                            <icon
                                class="w-6 h-6 mr-3 text-gray-600"
                                name="heart"
                            />
                            <p class="text-gray-900">Favorites</p>
                        </inertia-link>
                    </li>
                </ul>
            </div>
            <div class="mb-10">
                <h2 class="mb-4 text-gray-600 font-bold">DISCOVER</h2>
                <ul class="flex flex-col">
                    <li class="mb-4">
                        <inertia-link
                            :href="$route('welcome')"
                            class="inline-flex"
                        >
                            <icon
                                class="w-6 h-6 mr-3 text-gray-600"
                                name="tag"
                            />
                            <p class="text-gray-900">Albums</p>
                        </inertia-link>
                    </li>
                    <li class="mb-4">
                        <inertia-link
                            :href="$route('artists.index')"
                            class="inline-flex"
                        >
                            <icon
                                class="w-6 h-6 mr-3 text-gray-600"
                                name="user"
                            />
                            <p class="text-gray-900">Artists</p>
                        </inertia-link>
                    </li>
                    <li class="mb-4">
                        <inertia-link
                            :href="$route('welcome')"
                            class="inline-flex"
                        >
                            <icon
                                class="w-6 h-6 mr-3 text-gray-600"
                                name="eye"
                            />
                            <p class="text-gray-900">Browse</p>
                        </inertia-link>
                    </li>
                </ul>
            </div>
            <div>
                <h2 class="mb-4 text-gray-600 font-bold inline-flex">
                    <span class="mr-3">PLAYLISTS</span>
                    <icon class="w-6 h-6" name="plus" />
                </h2>
                <ul
                    v-for="playlist in playlists"
                    :key="playlist.id"
                    class="flex flex-col"
                >
                    <li class="mb-4">
                        <inertia-link :href="$route('welcome')">
                            {{ playlist.name }}
                        </inertia-link>
                    </li>
                </ul>
            </div>
        </div>

        <main class="w-full lg:w-4/5 px-10 pt-5">
            <slot />
        </main>

        <player class="hidden lg:flex fixed bottom-0 right-0 w-4/5" />
    </div>
</template>

<script>
import Icon from '@/Shared/Icon'
import Player from '@/Shared/Player'

export default {
    components: {
        Icon,
        Player,
    },
    data() {
        return {
            playlists: [
                {
                    id: 1,
                    name: 'Young, Wild & Free',
                },
                {
                    id: 2,
                    name: 'Travel Goals',
                },
                {
                    id: 3,
                    name: 'Never say NEVER',
                },
            ],
        }
    },
}
</script>
