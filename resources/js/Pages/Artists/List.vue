<template>
    <div>
        <div class="relative inline-flex w-full lg:w-auto items-center mb-5">
            <icon name="filter" class="absolute w-5 h-5 ml-3 text-gray-500" />
            <input
                v-model="filter"
                placeholder="Filter artists"
                class="rounded-xl bg-cream w-full pl-10 pr-6 py-3 text-sm text-gray-500"
            />
        </div>
        <div class="flex flex-wrap w-full lg:-mx-5">
            <div
                v-for="artist in artists"
                :key="artist.id"
                class="w-1/2 lg:w-1/4 mb-6 px-2 lg:px-5"
            >
                <img
                    :src="
                        artist.media.find(
                            media => media.collection_name === 'avatars',
                        ).url
                    "
                    class="rounded-full"
                />
            </div>
        </div>
    </div>
</template>

<script>
import Icon from '@/Shared/Icon'
import Layout from '@/Shared/Layout'

export default {
    metaInfo: {
        title: 'Artists',
    },
    layout: Layout,
    components: {
        Icon,
    },
    props: {
        artists: Array,
    },
    data() {
        return {
            filter: '',
        }
    },
}
</script>
