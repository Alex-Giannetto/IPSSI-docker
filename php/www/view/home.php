<header>
    <h1>Liste des messages</h1>
</header>

<div class="messages">
    <div class="listeMessage">
        <?php foreach ($messages as $messa): ?>
            <?php $message = $messa; include('message.php')  ?>
        <?php endforeach; ?>
    </div>
</div>

<footer>
    <form method="post">
        <textarea name="text" id="text" placeholder="Tapez votre message ici…"></textarea>
<!--        <input type="submit" class="btn btn--submit" value=">">-->
        <button class="btn--submit">
<!--            <img src="./assets/icon/send-button.svg" alt="send">-->
        </button>
    </form>
</footer>


