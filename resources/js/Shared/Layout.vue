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
                            <svg
                                class="w-6 h-6 mr-3"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"
                                />
                            </svg>
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
                            <svg
                                class="w-6 h-6 mr-3"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M4.31802 6.31802C2.56066 8.07538 2.56066 10.9246 4.31802 12.682L12.0001 20.364L19.682 12.682C21.4393 10.9246 21.4393 8.07538 19.682 6.31802C17.9246 4.56066 15.0754 4.56066 13.318 6.31802L12.0001 7.63609L10.682 6.31802C8.92462 4.56066 6.07538 4.56066 4.31802 6.31802Z"
                                />
                            </svg>

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
                            <svg
                                class="w-6 h-6 mr-3"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M7 7H7.01M7 3H12C12.5119 2.99999 13.0237 3.19525 13.4142 3.58579L20.4143 10.5858C21.1953 11.3668 21.1953 12.6332 20.4143 13.4142L13.4142 20.4142C12.6332 21.1953 11.3668 21.1953 10.5858 20.4142L3.58579 13.4142C3.19526 13.0237 3 12.5118 3 12V7C3 4.79086 4.79086 3 7 3Z"
                                />
                            </svg>

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
                            <svg
                                class="w-6 h-6 mr-3"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                            >
                                <path
                                    d="M16 7C16 9.20914 14.2091 11 12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7Z"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                />
                                <path
                                    d="M12 14C8.13401 14 5 17.134 5 21H19C19 17.134 15.866 14 12 14Z"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                />
                            </svg>

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
                            <svg
                                class="w-6 h-6 mr-3"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                            >
                                <path
                                    d="M14.9998 12C14.9998 13.6569 13.6566 15 11.9998 15C10.3429 15 8.99976 13.6569 8.99976 12C8.99976 10.3431 10.3429 9 11.9998 9C13.6566 9 14.9998 10.3431 14.9998 12Z"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                />
                                <path
                                    d="M2.45801 12C3.73228 7.94288 7.52257 5 12.0002 5C16.4778 5 20.2681 7.94291 21.5424 12C20.2681 16.0571 16.4778 19 12.0002 19C7.52256 19 3.73226 16.0571 2.45801 12Z"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                />
                            </svg>

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
                <ul class="flex flex-col">
                    <li class="mb-4">
                        <a
                            href="#"
                            class="text-gray-600 hover:text-gray-900 font-bold"
                        >
                            Young, Wild & Free
                        </a>
                    </li>
                    <li class="mb-4">
                        <a
                            href="#"
                            class="text-gray-600 hover:text-gray-900 font-bold"
                        >
                            Travel Goals
                        </a>
                    </li>
                    <li class="mb-4">
                        <a
                            href="#"
                            class="text-gray-600 hover:text-gray-900 font-bold"
                        >
                            Never say NEVER
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
export default {}
</script>
