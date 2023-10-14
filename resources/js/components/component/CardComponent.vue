<script>
import axios from "axios";
export default {
  name: 'CardComponent',
  data () {
    return {
    }
  },
  components: {
  },
  methods: {
    toTab(tab) {
      this.$emit('toTab', tab)
    }
  },
  async mounted() {
    const res = await axios.get("https://1.ce58977.tw1.ru/api/users/")
    console.log(res.data)
  }

}
</script>

<template>
  <div class="profile_container">
    <div class="left"></div>
    <div class="right">

      <div class="person">
        <div class="stat">
          <span>Имя:</span>
          <span>Кирил</span>
        </div>
        <div class="stat">
          <span>Возраст:</span>
          <span>18</span>
        </div>
        <div class="stat">
          <span>Вес:</span>
          <span>70</span>
        </div>
        <div class="stat">
          <span>Категория вождения:</span>
          <span>Нет</span>
        </div>
      </div>

      <div class="person">
        <div class="stat">
          <span>Энергия:</span>
          <span>100%</span>
        </div>
        <div class="stat">
          <span>Деньги:</span>
          <span>1.000₽</span>
        </div>
        <div class="stat">
          <span>Здоровье:</span>
          <span>100%</span>
        </div>
        <div class="stat">
          <span>Счастье:</span>
          <span>100</span>
        </div>
        <div class="stat">
          <span>Голод:</span>
          <span>70%</span>
        </div>
        <div class="stat">
          <span>Сила:</span>
          <span>1</span>
        </div>
        <div class="stat">
          <span>Ловкость:</span>
          <span>1</span>
        </div>
        <div class="stat">
          <span>Интеллект:</span>
          <span>1</span>
        </div>
        <div class="stat">
          <span>Удача:</span>
          <span>2</span>
        </div>
        <div class="stat">
          <span>Харизма:</span>
          <span>0</span>
        </div>
        <div class="stat">
          <span>Чистота:</span>
          <span>100%</span>
        </div>
        <div class="stat">
          <span>Профессия:</span>
          <span>Безработный</span>
        </div>
        <div class="stat">
          <span>Дата создания:</span>
          <span>01.01.2023</span>
        </div>
      </div>

      <div class="stats"></div>
    </div>
  </div>
</template>
<style scoped>
.profile_container {
  display: flex;
  width: 100%;
  height: 100vh;
  background: linear-gradient(#526d76, #374b50);
}
.left {
  width: 50%;
  height: 100%;
  background-size: cover;
  background-position: 50%;
  background-image: url("../imgs/profile.png");
  border-top: 2px solid black;
  border-right: 2px solid black;
}

.right {
  display: flex;
  flex-direction: column;
  width: 50%;
  border-top: 2px solid black;
  border-right: 2px solid black;
}
.person {
  display: flex;
  flex-direction: column;
  padding: 4px;

}
.person:first-child {
  border-bottom: 2px solid black;
}
.stat {
  display: flex;
  justify-content: space-between;
  font-family: system-ui;
}
.stat span:first-child {
  font-weight: bold;
}
</style>