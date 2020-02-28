<template>
    <h1>
        Artists
    </h1>
</template>

<script>
import Layout from '@/Shared/Layout'

export default {
    metaInfo: {
        title: 'Artists',
    },
    layout: Layout,
    props: {
        artists: Array,
    },
}
</script>
