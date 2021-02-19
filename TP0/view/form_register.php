<div class="container">
  <h1>My First Bootstrap Page</h1>
  <p>This is some text.</p>
</div>
<div class="container">
  <form method='get'>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="prenom">Prénom</label>
        <input type="text" class="form-control" placeholder="prenom" name="prenom" id="prenom">
      </div>
      <div class="form-group col-md-6">
        <label for="nom">Nom</label>
        <input type="text" class="form-control" placeholder="Nom" name="nom" id="nom">
      </div>
    </div>
    <div class="form-group">
      <label for="date">Date de naissance</label>
      <input type="date" class="form-control" id="date" placeholder="Date de naissance" name="date">
    </div>
    <div class="form-group">
      <label for="mail">Email address</label>
      <input type="email" class="form-control" id="mail" aria-describedby="emailHelp" placeholder="Enter email" name="mail">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
      <label for="pwd">Password</label>
      <input type="password" class="form-control" id="pwd" placeholder="Password" name="pwd">
    </div>
    <button name"bouton" type="submit" class="btn btn-primary">Envoyer</button>
  </form>
</div>
