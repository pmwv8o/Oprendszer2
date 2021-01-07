<form action="soldoutscript.php"
      method="POST"
      accept-charset="utf-8">

    <input type="text"
           name="name"
           value="<?= isset($postBack) && array_key_exists('name', $postBack) ? $postBack['name'] : ''?>"
           placeholder="Név"
           required="required"/>
    <br/>
    <input type="text"
           name="price"
           value="<?= isset($postBack)&& array_key_exists('price', $postBack) ? $postBack['price'] : ''?>"
           placeholder="Ár"
           required="required"/>
    <br/>
    
    <button type="submit" 
            name="submit">
        Mentés
    </button>
</form>