<template>
    <div class="flex min-h-screen">
        <div class="w-1/5 bg-cream hidden lg:flex flex-col px-12 pt-16">
            <div class="mb-10">
                <h2 class="mb-4 text-gray-600 font-bold">MY MUSIC</h2>
                <ul class="flex flex-col">
                    <li class="mb-4">
                        <a
                            href="#"
                            class="inline-flex text-gray-600 hover:text-gray-900"
                        >
                            <icon class="w-6 h-6 mr-3" name="clock" />
                            <span class="font-bold">
                                Recently Played
                            </span>
                        </a>
                    </li>
                    <li>
                        <a
                            href="#"
                            class="inline-flex text-gray-600 hover:text-gray-900"
                        >
                            <icon class="w-6 h-6 mr-3" name="heart" />
                            <span class="font-bold">
                                Favorite Songs
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="mb-10">
                <h2 class="mb-4 text-gray-600 font-bold">DISCOVER</h2>
                <ul class="flex flex-col">
                    <li class="mb-4">
                        <a
                            href="#"
                            class="inline-flex text-gray-600 hover:text-gray-900"
                        >
                            <icon class="w-6 h-6 mr-3" name="tag" />
                            <span class="font-bold">
                                Albums
                            </span>
                        </a>
                    </li>
                    <li class="mb-4">
                        <a
                            href="#"
                            class="inline-flex text-gray-600 hover:text-gray-900"
                        >
                            <icon class="w-6 h-6 mr-3" name="user" />
                            <span class="font-bold">
                                Artists
                            </span>
                        </a>
                    </li>
                    <li class="mb-4">
                        <inertia-link
                            :href="$route('browse')"
                            class="inline-flex text-gray-600 hover:text-gray-900"
                        >
                            <icon class="w-6 h-6 mr-3" name="eye" />
                            <span class="font-bold">
                                Browse
                            </span>
                        </inertia-link>
                    </li>
                </ul>
            </div>
            <div>
                <h2 class="mb-4 text-gray-600 font-bold inline-flex">
                    <span class="mr-3">
                        PLAYLISTS
                    </span>
                    <svg
                        class="w-6 h-6"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                    >
                        <path
                            d="M12 4V20M20 12L4 12"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                        />
                    </svg>
                </h2>
                <ul
                    v-for="playlist in playlists"
                    :key="playlist.id"
                    class="flex flex-col"
                >
                    <li class="mb-4">
                        <a
                            href="#"
                            class="text-gray-600 hover:text-gray-900 font-bold"
                        >
                            {{ playlist.name }}
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <main class="pt-5 px-10">
            <slot />
        </main>
    </div>
</template>

<script>
import Icon from '@/Shared/Icon'

export default {
    components: {
        Icon,
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
