<template>
    <div class="custom_card">
        <div class="content top">
            <h3>{{ type }}</h3>
            <p class="percentage"><i class="fa fa-arrow-up"></i> {{ percentage }}</p>
        </div>
        <div class="content footer">
            <i :class="['fa icon', icon]"></i>
            <p class="quantity">{{ quantity }}</p>
        </div>
    </div>
</template>

<script>
export default {
    name: 'CardsComponent',
    props: {
        type: String,
        percentage: String,
        icon: String,
        quantity: String
    }
}
</script>

<style lang="scss" scoped>
@import '../assets/scss/_main';

.custom_card {
    display: flex;
    flex-direction: column;
    width: 100%;
    background-color: $purple;
    padding: 15px;
    border-radius: 7px;
    color: $white;

    .content {
        display: flex;
        justify-content: space-between;
    }

    .top {
        .percentage {
            color: $green; 
        }
    }

    .footer {
        .icon {
            font-size: 35px;
        }

        .quantity {
            font-size: 30px;
            margin: 0;
        }
    }
}
</style>