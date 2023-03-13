
<style>
    .artani-chat-show-notLogged {
        display:flex;
        flex-direction: column;
        background: white;
        display: flex;
    bottom: -9rem;
    position: absolute;
    right: 10rem;
    }
.artani-chat-notLogged {
    position: relative;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    width: var(--chat-width);
    z-index: 2;
    box-sizing: border-box;
    border-radius: 1rem;
    background: black;
    color: white;
    box-shadow: 0 0 8rem 0 rgb(0 0 0 / 10%);
    top: var(--chat-contacts-float);
    width: var(--chat-contacts-width);
    padding: 1rem 2rem 1rem 1rem;
    box-shadow: 0 0 8rem 0 rgb(0 0 0 / 10%), 2rem 2rem 4rem -3rem rgb(0 0 0 / 50%);
}
.artani-chat-notLogged .container{
    display: flex;
    flex-direction: column;
    align-items: center;
}
.artani-chat-button {
    text-align: center;
    text-transform: uppercase;
    cursor: pointer;
    font-size: 10px;
    letter-spacing: 4px;
    position: relative;
    background-color: #000000;
    border: 2px solid purple;
    color: #fff;
    padding: 20px;
    width: 200px;
    text-align: center;
    transition-duration: 0.4s;
    overflow: hidden;
    box-shadow: 0 5px 15px #193047;
    border-radius: 4px;
    
}

.artani-chat-button:hover {
    background: #ffffff;
    box-shadow: 0px 2px 73px -6px #ffdffc;
    color: #5a006a;
    font-weight: bold;
    border-radius: 20px;
}

.artani-chat-button:after {
  content: "";
  background: purple;
  display: block;
  position: absolute;
  padding-top: 300%;
  padding-left: 350%;
  margin-left: -20px !important;
  margin-top: -120%;
  opacity: 0;
  transition: all 0.8s
}

.artani-chat-button:active:after {
  padding: 0;
  margin: 0;
  opacity: 1;
  transition: 0s
}

.artani-chat-button:focus { outline:0; }

</style>

  <div class="artani-chat-notLogged">
    <div class="container">
    Gostaria de conversar conosco?
    <button class="artani-chat-button">Entrar no Artani Chat</button>
    </div>
  </div>

  <script>

const container = document.querySelector('.container')
container.addEventListener('animationend', () => {
  container.classList.remove('active');
});

  </script>