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

  const artaniShowChat = document.querySelector('.artani-chat-show-chat');
  artaniShowChat.style.transform = 'translateY(-20rem)'
  const notLogged = document.querySelector('.artani-chat-show-notLogged');

  const artaniChatButton = document.querySelector('.artani-chat-button')

  artaniChatButton.onclick = () => {
    artaniShowChat.style.transition = '1s'
    artaniShowChat.style.opacity = '1'
    artaniShowChat.style.transform = 'translateY(0)'
    notLogged.style.transition = '.5s'
    notLogged.style.opacity = '0'
    notLogged.style.transform = 'translateY(-20rem)'
  }
  notLogged.style.opacity = '1'
//artaniShowChat.style.display = 'flex'
  chat.scrollTop = chat.scrollHeight - chat.clientHeight;
</script>