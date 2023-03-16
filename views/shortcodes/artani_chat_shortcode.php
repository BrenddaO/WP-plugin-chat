<link rel="stylesheet" href="<?php echo plugins_url( 'artani-chat/views/shortcodes/artani_chat_style.css' ); ?>">
<div class="center artani-chat">
  <div style="opacity: 0" class="artani-chat-show-chat">
    <?php require_once 'components/artani_chat_shortcode/chat.php' ?>
  </div>

  <div style="opacity: 0" class="artani-chat-show-notLogged">
    <?php require_once 'components/artani_chat_shortcode/notLogged.php' ?>
  </div>
</div>
<script>
  const chat = document.getElementById('chat');
  //localStorage.removeItem("artaniChatSession")
  const artaniShowChat = document.querySelector('.artani-chat-show-chat');
  artaniShowChat.style.transform = 'translateY(-20rem)'
  const notLogged = document.querySelector('.artani-chat-show-notLogged');
  notLogged.style.opacity = '1'
  const artaniChatButton = document.querySelector('.artani-chat-button')
  if (localStorage.getItem("artaniChatSession") !== null) {
      notLogged.style.opacity = '0'
      artaniShowChat.style.transition = '1s'
    artaniShowChat.style.opacity = '1'
    artaniShowChat.style.transform = 'translateY(0)'
  }

  fetch('<?php echo rest_url('artani-chat') ?>').then((e) => {
    console.log(e.json())
  })


  fetch('<?php echo rest_url('artani-chat/get-rooms') ?>').then((e) => {
    console.log(e.json())
  })

  fetch('<?php echo rest_url('artani-chat/create-room') ?>', {
    method: 'POST'
  }).then((e) => {
    console.log(e)
  })
  artaniChatButton.onclick = () => {
    artaniShowChat.style.transition = '1s'
    artaniShowChat.style.opacity = '1'
    artaniShowChat.style.transform = 'translateY(0)'
    notLogged.style.transition = '.5s'
    notLogged.style.opacity = '0'
    notLogged.style.transform = 'translateY(-20rem)'

      // Verifica se existe um cache com a chave "batatonics"
      if (localStorage.getItem("artaniChatSession") === null) {
        // Se não existir, adiciona uma nova entrada no cache com a chave "batatonics"
        console.log('não exist')
        localStorage.setItem("artaniChatSession", "{status: 'active', user_id: '29', token: 'dsajoijoidsajidsa}");
      } else {
        // Se existir, recupera o valor associado à chave "batatonics"
        const artaniChatSession = localStorage.getItem("artaniChatSession");
        console.log(`Valor atual de batatonics: ${artaniChatSession}`);
      }

  }
//artaniShowChat.style.display = 'flex'
  chat.scrollTop = chat.scrollHeight - chat.clientHeight;
</script>