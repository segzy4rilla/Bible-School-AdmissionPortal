const app = new Vue({
  el: '#app',

  data: {
    cssText: `
      .printing {
        font-family: sans-serif;
        width: 500px;
        border: solid 1px #ccc;
        text-align: center;
        padding: 1em;
        margin: 2em auto;
      }

      button {
        background-color: #f0f0f0;
        border: solid 1px #bbb;
        padding: 10px;
        font-size: 15px;
        border-radius: 5px;
      }

      pre {
        color: #c7254e;
      }
    ` },


  mounted() {
    console.log('when component is mounted!');

    const { Printd } = window.printd;

    this.d = new Printd();


    const { contentWindow } = this.d.getIFrame();

    contentWindow.addEventListener(
    'beforeprint', () => console.log('before print event!'));

    contentWindow.addEventListener(
    'afterprint', () => console.log('after print event!'));

  },

  methods: {

    print() {
      this.d.print(this.$el, [this.cssText]);
    } } });