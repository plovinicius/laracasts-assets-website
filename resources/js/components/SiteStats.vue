<template>
    <div>
        <h1 class="font-normal text-3xl leading-none mb-8">
            Laracasts Stats
        </h1>

        <ul>
            <li><strong>Total Series: </strong>{{ series }}</li>

            <li><strong>Total Lessons: </strong>{{ lessons }}</li>
        </ul>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                series: 0,
                lessons: 0
            }
        },

        created() {
            axios.get('http://localhost/api/stats')
                .then(({ data }) => { // this line is equal to { data } = response
                    this.series = data.series;
                    this.lessons = data.lessons;
                });
        }
    }
</script>
