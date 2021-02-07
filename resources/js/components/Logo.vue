<template>
    <div>
        <h1 class="font-normal text-3xl leading-none mb-8">
            Full Logo
        </h1>

        <div class="mb-10">
            <picture style="height: 382px;" class="block shadow flex items-center justify-center mb-6 rounded-lg">
                <img src="/images/logo.svg" alt="logo"/>
            </picture>

            <div class="flex justify-between items-center">
                <p>Original Logo on <strong>white</strong> background</p>

                <a class="border border-gray px-8 py-2 rounded-full text-black font-bold text-xs"
                    href="/images/logo.svg">logo.svg</a>
            </div>
        </div>

        <div>
            <picture style="height: 382px;" class="block shadow flex items-center justify-center mb-6 bg-blue-550 rounded-lg">
                <img src="/images/negative-logo.svg" alt="negative-logo"/>
            </picture>

            <div class="flex justify-between items-center">
                <p>Negative logo on <strong>white</strong> background</p>

                <a class="border border-gray px-8 py-2 rounded-full text-black font-bold text-xs"
                    href="/images/negative-logo.svg">negative-logo.svg</a>
            </div>
        </div>
    </div>
</template>

<script>
export default {}
</script>
