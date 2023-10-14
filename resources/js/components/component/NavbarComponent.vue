<script>

export default {
  name: 'NavbarComponent',
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


}
</script>

<template>
  <nav>
  <div class="nav-content">
    <ul class="nav-links">
      <li><a @click="toTab('profile')">Профиль</a></li>
      <li><a @click="toTab('inventory')">Инвентарь</a></li>
      <li><a @click="toTab('shop')">Магазин</a></li>
      <li><a @click="toTab('tasts')">Задания</a></li>
      <li><a @click="toTab('chat')">Чат</a></li>
    </ul>
  </div>
</nav>
</template>
<style scoped>
/* Google Font Import Link */
@import url('https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  text-decoration: none;
  font-family: 'Ubuntu', sans-serif;
}
nav{
  width: 100%;
  padding: 10px;
  transition: all 0.4s ease;
}

.nav-content .nav-links{
  display: flex;
  justify-content: center;
}
.nav-content .nav-links li{
  list-style: none;
  margin: 0 1px;
}
.nav-links li a{
  text-decoration: none;
  color: #ffffff;
  font-size: 16px;
  font-weight: 500;
  padding: 10px 4px;
  transition: all 0.3s ease;
  cursor: pointer;
}
.nav-links li a:hover{
  color: #4070f4;
}
nav.sticky .nav-links li a{
  color: #fff;
  transition: all 0.4s ease;
}

</style>