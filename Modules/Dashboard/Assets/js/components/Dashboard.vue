<template>
    <div>
        <div class="container">
            <h1>Welcome to dashboard</h1>
        </div>
    </div>
</template>
<script>
import ShortcutHelper from "../../../../Core/Assets/js/mixins/ShortcutHelper";

export default {
  mixins: [ShortcutHelper],
  data() {
    return {
        data : null
    }
  }
}
</script>
