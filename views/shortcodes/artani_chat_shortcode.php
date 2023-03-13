<link rel="stylesheet" href="<?php echo plugins_url( 'artani-chat/views/shortcodes/artani_chat_style.css' ); ?>">
<div class="center artani-chat">
  <div style="display: none" class="artani-chat-show-chat">
    <?php require_once 'components/artani_chat_shortcode/chat.php' ?>
  </div>

  <div style="display: none" class="artani-chat-show-notLogged">
    <?php require_once 'components/artani_chat_shortcode/notLogged.php' ?>
  </div>

</div>

<script>
  var chat = document.getElementById('chat');

  const artaniShowChat = document.querySelector('.artani-chat-show-chat');
  const notLogged = document.querySelector('.artani-chat-show-notLogged');

  notLogged.style.display = 'flex'
  //artaniShowChat.style.display = 'flex'
  chat.scrollTop = chat.scrollHeight - chat.clientHeight;
</script>