<script>
import { VueDraggableNext } from 'vue-draggable-next'
export default {
  name: 'PlayerView',
  setup() {
    const getImageUrl = (name) => {
      return new URL(`./imgs/${name}`, import.meta.url).href
    }
    return { getImageUrl }
  },
  data () {
    return {
      item: {},
      currentTab: 'inventory',
      list1: [
        { img: 'img.png', alt: 'Deagle' },
        { img: 'key.png', alt: 'Blue Waffle' },
        { img: 'img.png', alt: 'Курица' },
        { img: 'key.png', alt: 'Книга' },
      ],
      list2: [
        { img: 'shaulma.jpg', alt: 'Тизер' },
      ],

    }
  },
  components: {
    draggable: VueDraggableNext
  },
  methods: {
    onPress(item) {
      this.list1.forEach(val => val.clicked = false)
      item.clicked = !item.clicked
      if(item.clicked) {
        this.item = item
      } else {
        this.item = {}
      }
    },
    onUse() {
      console.log(this.item)
      let i = this.list1.indexOf(this.item)
      if(i !== -1) {
        this.list1.splice(i, 1)
      }
    },
    toTab(tab) {
      this.currentTab = tab
    }
  }

}
</script>

<template>
  <div class="body">
    <navbar-component @toTab="toTab"/>
    <main v-if="currentTab === 'inventory'" class="invent_container">
      <section class="section">
        <div class="grid-container">
          <!-- section titles -->


          <!-- storage -->
          <draggable
              class="item-container"
              :list="list1"
              group="people"
              item-key="id"
          >
              <div v-for="element in list1"
                   :key="element"
                   @click="onPress(element)"
                   :class="{clicked: element.clicked}"
                   class="item-cell" id="i1">
                <div  class="item">
                  <img :src="getImageUrl(element.img)"/>
                </div>
              </div>
          </draggable>

        </div>
      </section>
      <div class="title">
        Действия
      </div>
      <!-- actions -->
      <div class="action-container">
        <!-- use -->
        <button class="btn" @click="onUse">Использовать</button>
        <!-- give -->
        <button class="btn" @click="onUse">Выбросить</button>
      </div>
      <!-- hotbar section -->
      <section class="section">
        <div class="hotbar-grid-container">
          <div class="title">Инвентарь</div>

          <div class="hotbar-item-container">
            <draggable
                class="hotbar-item-container"
                :list="list2"
                group="people"
                item-key="id"
            >
                <div class="hotbar-item-cell"  id="h1" v-for="element in list2" :key="element">
                  <div class="item">
                    <img :src="getImageUrl(element.img)"/>
                  </div>
                </div>
            </draggable>
          </div>
        </div>
      </section>
    </main>
    <card-component @toTab="toTab" v-else-if="currentTab === 'profile'"/>
  </div>
</template>
<style scoped>
.body {
  background-size: cover;
  background-image: url("https://e0.pxfuel.com/wallpapers/789/821/desktop-wallpaper-blur-blur-game.jpg");
  background-repeat: no-repeat;
  background-color: #111;
  font-family: Helvetica, sans-serif;
  color: #fff;
  /* makes text unselectable */
  -webkit-user-select: none;
  /* Safari */
  -moz-user-select: none;
  /* Firefox */
  -ms-user-select: none;
  /* IE10+/Edge */
  user-select: none;
  /* Standard */
}
.invent_container {
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  height: 100vh;
  overflow-y: auto;
}
.tab {
  padding: 0px 20px;
  cursor: pointer;
  opacity: .6;
}
.tab.active {
  opacity: 1;
}
.section {
  height: 50%;
}
.clicked {
  background-color: yellow;
}
.title {
  text-align: center;
  background-color: rgb(0, 0, 0, .6);
  color: white;
}

.btn {
  background-color: #222;
  border-radius: 4px;
  border-style: none;
  box-sizing: border-box;
  color: #fff;
  cursor: pointer;
  display: inline-block;
  font-family: "Farfetch Basis","Helvetica Neue",Arial,sans-serif;
  font-size: 16px;
  font-weight: 700;
  line-height: 1.5;
  margin: 0;
  min-height: 44px;
  min-width: 10px;
  outline: none;
  overflow: hidden;
  padding: 9px 20px 8px;
  position: relative;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  width: 50%;
  margin: 0 10px;
}

.btn:hover {
  opacity: .75;
}

.item {
  width: 100%;
  height: 100%;
  background-size: contain;
  background-repeat: no-repeat;
  background-position: center;
}
.grid-container {
  display: flex;
  flex-direction: column;
  opacity: 0.6;
  background: #000;
  grid-gap: 1%;
  text-align: center;
  height: 100%;
}
.hotbar-grid-container {
  display: grid;
  opacity: 0.6;
  background: #000;
  padding: 1% 1% 1% 1%;
  grid-gap: 1%;
  text-align: center;
  height: 100%;
}
/* inventory/storage middle layer container */
.item-container {
  display: grid;
  overflow: scroll;
  overflow-x: hidden;
  background-color: #111;
  grid-template-columns: repeat(4, 1fr);
  grid-template-rows: auto;
  max-height: 25em;
}
/* individual inventory items */
.item-cell {
  border-style: solid;
  border-width: 0.1em;
  height: 6em;

  width: 6em;
}
.item-cell img, .item img {
  width: 100%;
}
/* text boxes underneath items */
.overlay {
  margin: 1em;
}
/* makes cells change colour on hover */
.item-cell:hover {
  background-color: yellow;
  color: #000;
}
/* actions middle layer container */
.action-container {
  display: flex;
  justify-content: space-between;
  padding: 4%;
  background-color: rgb(17, 17, 17, .6);
  max-height: 28em;
}

.hotbar-item-container {
  display: grid;
  padding: 0.5em;
  grid-gap: 0.5em;
  background-color: #111;
  grid-template-columns: repeat(3, 1fr);
  grid-template-rows: auto;
  max-height: 25em;
  width: 97%;
  min-height: 110px;
}
/* individual inventory items */
.hotbar-item-cell {
  border-radius: 4px;
  background-color: #ccc;
  height: 6em;
  width: 6em;
}
/* numbers denoting which hotkey is attached */
.hotkey-overlay {
  display: grid;
  position: absolute;
  top: 0;
  left: 0;
  background: rgba(255, 255, 255, 0.6);
  color: #000;
  padding: 6%;
}

</style>