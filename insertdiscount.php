<form action="discountscript.php"
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
    <input type="text"
           name="offer"
           value="<?= isset($postBack)&& array_key_exists('offer', $postBack) ? $postBack['offer'] : ''?>"
           placeholder="Kedvezmény"
           required="required"/>
    <br/>
    <input type="text"
           name="discountprice"
           value="<?= isset($postBack)&& array_key_exists('discountprice', $postBack) ? $postBack['discountprice'] : ''?>"
           placeholder="Kedvezményes Ár"
           required="required"/>
    <br/>
    
    
    <button type="submit" 
            name="submit">
        Mentés
    </button>
</form>