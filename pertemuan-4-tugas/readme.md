Tugas dari dilbadil

Sebelum kita masuk ke materi selanjutnya, aku ingin kasih tugas nih.

Permasalahan :
- Didalam sebuah project tertentu, kita butuh untuk memparsing tag html. Misal kita ingin mengambil attribute "id" nya, menset "name" nya.

Solusi:
- Buat sebuah class TagParser yang berguna untuk mengolah sebuah tag html.
    contoh:
     
    // Aku punya string html seperti ini 
    $html = "<p id='paragraph_id' value='hello' class='paragraph_class' name='paragraph'>This is text</p>";
    $tag = new TagParser($html);
   
    // Method method yang harus ada

    
    # Method "getAttributes" ini mengembalikan semua attribute yang ada
    # pada kasus diatas, contoh kembalian array seperti ini:
    # array(
    #    'id' => 'paragraph_id',
    #    'value' => 'hello',
    #    'class' => 'paragraph_class',
    #    'name' => 'paragraph',
    # );
    $tag->getAttributes();

    
    # Method ini mengembalikan String html yang ada.
    # contoh: "<p id='paragraph_id' value='hello' class='paragraph_class' name='paragraph'>This is text</p>"
    $tag->getHtml();

    # Method ini mengembalikan content dari tag tersebut.
    # contoh: "This is text"
    $tag->getContent();

    # Method ini mengembalikan nama tag.
    # contoh: "p"
    $tag->getTagName();

    # Method ini mengembalikan attribute berdasarkan namanya.
    # contoh: "paragraph_id"
    $tag->getAttribute('id');

    # Method ini mengembalikan attribute id (jika terdapat attribute id, jika tidak ada maka kembalian nya kosong saja "")
    $tag->getId();

    # Method ini mengembalikan attribute class (jika terdapat attribute class, jika tidak ada maka kembalian nya kosong saja "")
    $tag->getClass();

    # Method ini mengembalikan attribute name (jika terdapat attribute name, jika tidak ada maka kembalian nya kosong saja "")
    $tag->getName();

    # Method ini mengembalikan attribute value (jika terdapat attribute value, jika tidak ada maka kembalian nya kosong saja "")
    $tag->getName();

    
    # Method ini berfungsi untuk menset attribute, parameter 1 = nama attribute, parameter 2
    # Ini akan mengubah attribute dari tag tersebut, sehingga ketika memanggil method getAttributes(), getAttribute('id'), getHtml()
    # maka juga akan mempengaruhinya.
    $tag->setAttribute('id', 'new_id');


Selamat mengerjakan :)
