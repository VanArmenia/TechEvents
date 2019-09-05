<template>
    <tr>
    <td>
    {{ event.name }}
    </td>
    <td>
    {{ event.venue }}
    </td>
    <td v-if="event.published">
    <button class="btn btn-danger" style="width: 120px;">Not Published</button>
    </td>
    <td v-else>
    <button class="btn btn-info" style="width: 120px;">Published</button>


    </td>
    </tr>
</template>

<script>
    export default {
         props: {
         event: Object
         }
    }
</script>