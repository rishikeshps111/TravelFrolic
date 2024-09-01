<template>
    <transition name="fade">
        <div v-if="isLoading" id="preloader" class="preloader">
            <div id="preloader">
                <div id="status"></div>
            </div>
        </div>
    </transition>
</template>

<script>
import { ref, onMounted } from 'vue';

export default {
    setup() {
        const isLoading = ref(true);

        onMounted(() => {
            setTimeout(() => {
                isLoading.value = false;
            }, 200); // Delay in milliseconds
        });

        return { isLoading };
    },
};
</script>

<style scoped>
.fade-enter-active,
.fade-leave-active {
    transition: opacity 1s;
}

.fade-enter,
.fade-leave-to

/* .fade-leave-active in <2.1.8 */
    {
    opacity: 0;
}

#preloader {
    /* Your preloader styles here */
}
</style>