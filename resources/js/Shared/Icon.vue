<template>
    <span>
        <svg v-if="name === 'clock'" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path
                d="M12 8V12L15 15M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z"
                stroke-width="1.5"
                stroke-linecap="round"
                stroke-linejoin="round"
            />
        </svg>
        <svg v-if="name === 'heart'" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path
                d="M4.31802 6.31802C2.56066 8.07538 2.56066 10.9246 4.31802 12.682L12.0001 20.364L19.682 12.682C21.4393 10.9246 21.4393 8.07538 19.682 6.31802C17.9246 4.56066 15.0754 4.56066 13.318 6.31802L12.0001 7.63609L10.682 6.31802C8.92462 4.56066 6.07538 4.56066 4.31802 6.31802Z"
                stroke-width="1.5"
                stroke-linecap="round"
                stroke-linejoin="round"
            />
        </svg>
        <svg v-if="name === 'tag'" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path
                d="M7 7H7.01M7 3H12C12.5119 2.99999 13.0237 3.19525 13.4142 3.58579L20.4143 10.5858C21.1953 11.3668 21.1953 12.6332 20.4143 13.4142L13.4142 20.4142C12.6332 21.1953 11.3668 21.1953 10.5858 20.4142L3.58579 13.4142C3.19526 13.0237 3 12.5118 3 12V7C3 4.79086 4.79086 3 7 3Z"
                stroke-width="1.5"
                stroke-linecap="round"
                stroke-linejoin="round"
            />
        </svg>
        <svg v-if="name === 'user'" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path
                d="M16 7C16 9.20914 14.2091 11 12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7Z"
                stroke-width="1.5"
                stroke-linecap="round"
                stroke-linejoin="round"
            />
            <path
                d="M12 14C8.13401 14 5 17.134 5 21H19C19 17.134 15.866 14 12 14Z"
                stroke-width="1.5"
                stroke-linecap="round"
                stroke-linejoin="round"
            />
        </svg>
        <svg v-if="name === 'eye'" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path
                d="M14.9998 12C14.9998 13.6569 13.6566 15 11.9998 15C10.3429 15 8.99976 13.6569 8.99976 12C8.99976 10.3431 10.3429 9 11.9998 9C13.6566 9 14.9998 10.3431 14.9998 12Z"
                stroke-width="1.5"
                stroke-linecap="round"
                stroke-linejoin="round"
            />
            <path
                d="M2.45801 12C3.73228 7.94288 7.52257 5 12.0002 5C16.4778 5 20.2681 7.94291 21.5424 12C20.2681 16.0571 16.4778 19 12.0002 19C7.52256 19 3.73226 16.0571 2.45801 12Z"
                stroke-width="1.5"
                stroke-linecap="round"
                stroke-linejoin="round"
            />
        </svg>
        <svg v-if="name === 'plus'" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path
                d="M12 4V20M20 12L4 12"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="1.5"
            />
        </svg>
    </span>
</template>

<script>
export default {
    props: {
        name: String,
    },
}
</script>
