<?php
    require_once '../data/udata.php';
?>
<!DOCTYPE html>
<html data-theme="os">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1 user-scalable=no">
    <title>Dashboard || Simple Crypto Wallet</title>
    <link rel="stylesheet" type="text/css" href="style.css" title="ltr">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="../img/logo_single.png" type="image/x-icon">
    <link rel="shortcut icon" type="image/png" href="../img/logo_single.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <style>

        li.dropdown-menu-item:hover {
            color: var(--color-text-default);
            background-color: var(--color-background-alternative);
            border-radius: 4px;
        }
        .menu-droppo-enter {
            transition: transform 300ms ease-in-out;
            transform: translateY(-200%);
        }

        .menu-droppo-enter.menu-droppo-enter-active {
            transition: transform 300ms ease-in-out;
            transform: translateY(0%);
        }

        .menu-droppo-leave {
            transition: transform 300ms ease-in-out;
            transform: translateY(0%);
        }

        .menu-droppo-leave.menu-droppo-leave-active {
            transition: transform 300ms ease-in-out;
            transform: translateY(-200%);
        }
    
        @media screen and (max-width: 425px) {
          .menu__container {
            transform: translate(165px, 114px);
          }
        }
        @media screen and (min-width: 425px) {
          .menu__container {
            transform: translate(959px, 115px);
          }
        }
    </style>
</head>

<body>
    <div id="app-content">
        <div class="app os-win mouse-user-styles">
            <span style="display:none;" id="receve">
                <div class="modal"
                    style="width: 335px; box-shadow: rgba(0, 0, 0, 0.15) 0px 2px 2px 2px; border-radius: 4px; top: 10%; transform: none; left: 0px; right: 0px; margin: 0px auto;">
                    <div class="modal__content" tabindex="-1"
                        style="animation-duration: 0.3s; animation-name: anim_11658482326191; animation-timing-function: ease-out; border-radius: 4px;">
                        <div class="account-details-modal account-modal" style="border-radius: 4px;">
                            <div class="account-modal__container">
                                <div>
                                    <div class="">
                                        <div class="identicon" style="height: 64px; width: 64px; border-radius: 32px;">
                                            <div
                                                style="border-radius: 50px; overflow: hidden; padding: 0px; margin: 0px; width: 64px; height: 64px; display: inline-block; background: rgb(251, 24, 126);">
                                                <svg x="0" y="0" width="64" height="64">
                                                    <rect x="0" y="0" width="64" height="64"
                                                        transform="translate(-3.30147906918952 2.5540474220935176) rotate(145.7 32 32)"
                                                        fill="#035C5E"></rect>
                                                    <rect x="0" y="0" width="64" height="64"
                                                        transform="translate(-18.662016771725426 26.095118210073693) rotate(169.4 32 32)"
                                                        fill="#F5A300"></rect>
                                                    <rect x="0" y="0" width="64" height="64"
                                                        transform="translate(-57.331466870188144 -24.151958723422865) rotate(289.0 32 32)"
                                                        fill="#F27E02"></rect>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button class="account-modal__close" onclick="receve()"></button>
                                <div class="editable-label account-details-modal__name">
                                    <div class="editable-label__value"><?= $userData['username'];?></div>
                                    <!-- <button class="editable-label__icon-button">
                                        <i class="fas fa-pencil-alt editable-label__icon"></i>
                                    </button> -->
                                </div>
                                <div class="qr-code">
                                    <div class="qr-code__wrapper">
                                        <img src="https://chart.googleapis.com/chart?chs=150x150&cht=qr&chl=<?= $network['address'];?>&choe=UTF-8&chld=H|0"
                                            alt="addressqrcode">
                                        <!-- width="500" height="600"> -->
                                    </div>
                                    <div class="qr-code__address-container__tooltip-wrapper">
                                        <div onclick="copy('wallt2','copybtn1')" class="" tabindex="0" title="copy to clipboard"
                                            id="copybtn1" style="display: inline;">
                                            <div class="qr-code__address-container">
                                                <div class="qr-code__address" id="wallt2">
                                                    <?= $network['address'];?>
                                                </div>
                                                <div class="qr-code__copy-icon">
                                                    <svg class="qr-code__copy-icon__svg" width="11" height="11"
                                                        viewBox="0 0 11 11" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M0 0H1H9V1H1V9H0V0ZM2 2H11V11H2V2ZM3 3H10V10H3V3Z"
                                                            fill=""></path>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="account-details-modal__divider"></div>
                                <a target="_blank" href="<?=$exURL;?>">
                                    <button class="button btn--rounded btn-secondary account-details-modal__button"
                                        role="button" tabindex="0">
                                        <span>View Account on <?=$explorer;?></span>
                                    </button>
                                </a>
                                <!-- <button class="button btn--rounded btn-secondary account-details-modal__button"
                                        role="button" tabindex="0">Export Private Key
                                    </button> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div onclick="receve()" class="modal__backdrop"
                    style="animation-name: anim_31658482326192; animation-timing-function: ease-out; background-color: var(--color-overlay-default);">
                </div>
            </span>
            <span style="display:none;" id="scanqr">
                <div class="modal"
                    style="transform: translate3d(-50%, 0px, 0px); border: 1px solid var(--color-border-default); border-radius: 8px; background-color: var(--color-background-default); box-shadow: rgba(0, 0, 0, 0.2) 0px 2px 22px 0px; width: 344px; top: 15%;">
                    <div class="modal__content" tabindex="-1"
                        style="animation-duration: 0.3s; animation-name: anim_11658587757148; animation-timing-function: ease-out; border-radius: 8px;">
                        <div class="qr-scanner">
                            <div onclick="scanqr()" class="qr-scanner__close"></div>
                            <div class="qr-scanner__title">Scan QR Code</div>
                            <div class="qr-scanner__content">
                                <div class="qr-scanner__content__video-wrapper">
                                    <div id="qr-reader"></div>
                                    <!--<video id="videoqr" style="transform: rotateY(0deg);" autoplay="true" muted="true" playsinline="true" autofocus="true"></video>-->
                                </div>
                            </div>
                            <div class="qr-scanner__status">Place the QR code in front of your camera</div>
                        </div>
                    </div>
                </div>
                <div onclick="scanqr()" class="modal__backdrop"
                    style="animation-name: anim_31658587757149; animation-timing-function: ease-out; background-color: var(--color-overlay-default);">
                </div>
            </span>
            <div class="app-header">
                <div class="app-header__contents">
                    <div class="app-header__logo-container app-header__logo-container--clickable">
                        <img src="../img/logo.png" width="180px" height="40px" alt="Simple Crypto Wallet logotype">
                    </div>
                    <div class="app-header__account-menu-container">
                        <div class="app-header__network-component-wrapper">
                            <div class="network-display network-display--clickable chip chip--with-left-icon chip--with-right-icon chip--border-color-border-default chip--background-color-undefined chip--max-content"
                                role="button" tabindex="0" onclick="netwroks()">
                                <div class="chip__left-icon">
                                    <div class="color-indicator color-indicator--filled color-indicator--color-mainnet color-indicator--size-lg">
                                        <span class="color-indicator__inner-circle"></span>
                                    </div>
                                </div>
                                <span class="box box--margin-top-1 box--margin-right-0 box--margin-bottom-1 box--margin-left-0 box--flex-direction-row typography chip__label typography--h7 typography--weight-normal typography--style-normal typography--color-text-alternative"><?=$network['name'];?></span>
                                <div class="chip__right-icon"><svg width="16" height="16" fill="currentColor"
                                        class="network-display__icon" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 512 512">
                                        <path
                                            d="m399 177c-8-8-22-8-30 0l-113 113-113-113c-8-8-22-8-30 0-8 8-8 22 0 30l128 128c8 8 22 8 30 0l128-128c8-8 8-22 0-30z">
                                        </path>
                                    </svg></div>
                            </div>
                        </div>
                        <button class="account-menu__icon" onclick="accountz()">
                            <div class="identicon__address-wrapper"
                                style="height: 40px; width: 40px; border-radius: 20px;">
                                <div class="identicon" style="height: 32px; width: 32px; border-radius: 16px;">
                                    <div
                                        style="border-radius: 50px; overflow: hidden; padding: 0px; margin: 0px; width: 32px; height: 32px; display: inline-block; background: rgb(251, 24, 126);">
                                        <svg x="0" y="0" width="32" height="32">
                                            <rect x="0" y="0" width="32" height="32"
                                                transform="translate(-1.65073953459476 1.2770237110467588) rotate(145.7 16 16)"
                                                fill="#035C5E"></rect>
                                            <rect x="0" y="0" width="32" height="32"
                                                transform="translate(-9.331008385862713 13.047559105036846) rotate(169.4 16 16)"
                                                fill="#F5A300"></rect>
                                            <rect x="0" y="0" width="32" height="32"
                                                transform="translate(-28.665733435094072 -12.075979361711433) rotate(289.0 16 16)"
                                                fill="#F27E02"></rect>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </button>
                    </div>
                </div>
            </div>
            <div class="menu-droppo-container network-droppo"
                style="position: absolute; top: 58px; width: 309px; z-index: 55;">
                <div id="netwroks" class="menu-droppo"
                    style="display: none; border-radius: 4px; padding: 16px 0px; background: var(--color-background-default); box-shadow: rgba(0, 0, 0, 0.15) 0px 2px 2px 2px;">
                    
                    <div class="network-dropdown-header">
                        <div class="network-dropdown-title">Networks</div>
                        <div class="network-dropdown-divider"></div>                        
                    </div>
                    <div class="network-dropdown-list">
                        <?php
                            foreach($AllNetwork as $d){
                        ?>
                        <li class="dropdown-menu-item" tabindex="0"
                            style="list-style: none; padding: 16px; font-size: 16px; font-style: normal; cursor: pointer; display: flex; justify-content: flex-start; align-items: center; line-height: 20px;">
                            <form action="" method="post">
                                <input type="hidden" name="coin"
                                       value="<?=$d['network'];?>">
                                <button type="submit" class="" name="loadnet">
                                    Switch
                                </button>
                            </form>
                            <div class="color-indicator color-indicator--filled color-indicator--color-mainnet color-indicator--size-lg">
                                <span class="color-indicator__inner-circle"></span>
                            </div>
                            <span class="network-name-item" style="color: var(--color-text-alternative);"><?=$d['name']?></span>
                        </li>
                        
                        <?php } ?>
                    </div>
                    <div class="network__add-network-button">
                        <button onclick="settingz(),netwroks(),sett5()" class="button btn--rounded btn-secondary" role="button" tabindex="0">
                            Request Network
                        </button>
                    </div>
                </div>
            </div>
            <div id="accountz" class="account-menu" style="display: none;">
                <div class="account-menu__close-area" onclick="accountz()"></div>
                <div class="account-menu__item account-menu__header">My Accounts                    
                </div>
                <div class="account-menu__divider"></div>
                <div class="account-menu__accounts-container">
                    <div class="account-menu__accounts">
                        <button
                            class="account-menu__account account-menu__item--clickable">
                            <div class="account-menu__check-mark">
                                <svg width="24" height="24"
                                    fill="var(--color-success-default)" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 512 512">
                                    <path
                                        d="m420 134c9 9 9 22 0 30l-213 214c-8 8-22 8-30 0l-85-86c-9-8-9-21 0-30 8-8 21-8 30 0l70 70 198-198c9-8 22-8 30 0z">
                                    </path>
                                </svg>
                            </div>
                            <div class="">
                                <div class="identicon" style="height: 24px; width: 24px; border-radius: 12px;">
                                    <div
                                        style="border-radius: 50px; overflow: hidden; padding: 0px; margin: 0px; width: 24px; height: 24px; display: inline-block; background: rgb(251, 24, 126);">
                                        <svg x="0" y="0" width="24" height="24">
                                            <rect x="0" y="0" width="24" height="24"
                                                transform="translate(-1.2380546509460701 0.9577677832850692) rotate(145.7 12 12)"
                                                fill="#035C5E"></rect>
                                            <rect x="0" y="0" width="24" height="24"
                                                transform="translate(-6.998256289397035 9.785669328777637) rotate(169.4 12 12)"
                                                fill="#F5A300"></rect>
                                            <rect x="0" y="0" width="24" height="24"
                                                transform="translate(-21.499300076320555 -9.056984521283576) rotate(289.0 12 12)"
                                                fill="#F27E02"></rect>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="account-menu__account-info">
                                <div class="account-menu__name"><?= $userData['username'];?></div>
                                <div class="currency-display-component account-menu__balance" title="<?=$userData['main'];?> <?=$coin;?>">
                                    <span class="currency-display-component__prefix"></span><span
                                        class="currency-display-component__text"><?=$userData['main'];?></span><span
                                        class="currency-display-component__suffix"><?=$coin;?></span>
                                </div>
                            </div>
                        </button>
                    </div>
                </div>
                <div class="account-menu__divider"></div>
                <a href="https://www.SimpleCryptoWallet.com/support/" target="_blank">
                    <button class="account-menu__item account-menu__item--clickable">
                        <div class="account-menu__item__icon">
                            <svg width="24" height="24"
                                fill="var(--color-icon-alternative)" aria-label="Support" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 512 512">
                                <path
                                    d="m357 221c0-63-66-114-146-114-81 0-146 51-146 114 0 25 10 47 27 66-10 22-25 39-25 39-2 1-3 4-2 6 2 3 3 3 6 3 25 0 46-8 61-18 23 12 50 18 79 18 80 0 146-50 146-114z m86 157c16-18 26-41 26-66 0-47-38-88-91-105 1 5 2 10 2 14 0 76-76 137-169 137-8 0-15 0-22-1 21 41 73 70 134 70 29 0 56-7 78-18 16 9 37 18 63 18 2 0 4-1 5-3 0-2 0-5-2-7 0 0-15-17-24-39z">
                                </path>
                            </svg></div>
                        <div class="account-menu__item__text">Support</div>
                    </button>
                </a>
                    
                <button onclick="settingz()" class="account-menu__item account-menu__item--clickable">
                    <div class="account-menu__item__icon">
                        <svg width="24" height="24" fill="var(--color-icon-alternative)" aria-label="Settings"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path
                                d="m256 326c-9 0-18-2-27-5-8-4-16-9-23-15-6-7-11-15-15-23-3-9-5-18-5-27 0-9 2-18 5-27 4-8 9-16 15-23 7-6 15-11 23-15 9-3 18-5 27-5 19 0 37 7 50 20 13 13 20 31 20 50 0 19-7 37-20 50-13 13-31 20-50 20z m176-35c3 0 7-2 10-4 2-2 4-6 5-9 0 0 1-10 1-22 0-12-1-22-1-22-1-3-3-7-5-9-3-2-7-4-10-4l-37 0c-7 0-15-4-17-10-2-6-4-23 1-29l26-26c2-2 4-6 4-9 0-4-1-7-3-10l-31-31c-3-2-6-3-10-3-3 0-7 2-9 4l-26 26c-6 5-14 7-19 5-6-3-20-14-20-21l0-37c0-3-2-7-4-10-2-2-6-4-9-5 0 0-10-1-22-1-12 0-22 1-22 1-3 1-7 3-9 5-2 3-4 7-4 10l0 37c0 7-4 15-10 17-6 2-23 4-29-1l-26-26c-2-2-6-4-9-4-4 0-7 1-10 3l-31 31c-2 3-3 6-3 10 0 3 2 7 4 9l26 26c5 6 7 14 5 19-3 6-14 20-21 20l-37 0c-3 0-7 2-10 4-2 2-4 6-5 9 0 0-1 10-1 22 0 12 1 22 1 22 1 7 8 13 15 13l37 0c7 0 15 4 17 10 2 6 4 23-1 29l-26 26c-2 2-4 6-4 9 0 4 1 7 3 10l31 31c3 2 6 3 10 3 3 0 7-2 9-4l26-26c6-5 14-7 19-5 6 3 20 14 20 21l0 37c0 7 6 14 13 15 0 0 10 1 22 1 12 0 22-1 22-1 3-1 7-3 9-5 2-3 4-7 4-10l0-37c0-7 4-15 10-17 6-2 23-4 29 1l26 26c2 2 6 4 9 4 4 0 7-1 10-3l31-31c2-3 3-6 3-10 0-3-2-7-4-9l-26-26c-5-6-7-14-5-19 3-6 14-20 21-20z">
                            </path>
                        </svg>
                    </div>
                    <div class="account-menu__item__text">Settings</div>
                </button>
                <button onclick="window.location.href='logout.php';" class="account-menu__item account-menu__item--clickable">
                    <div class="account-menu__item__icon">
                        <i class="menu-item__icon fas fa-external-link-alt"></i>
                    </div>
                    <div class="account-menu__item__text">Logout</div>
                </button>
            </div>
            <div class="main-container-wrapper">
                <div class="main-container" id="maint">
                    <div class="home__container">
                        <div class="home__main-view">
                            <div class="menu-bar">
                                <div class="selected-account">
                                    <div class="selected-account__tooltip-wrapper">
                                        <div class="" tabindex="0" style="display: inline;">
                                            <button data-bs-toggle="tooltip" data-bs-placement="bottom" id="copybtn"
                                                title="Copy to clipboard" onclick="copy('wallt1','copybtn')"
                                                class="selected-account__clickable">
                                                <div class="selected-account__name"><?= $userData['username'];?></div>
                                                <div class="selected-account__address">
                                                    <span><?= substr($network['address'], 0, 6)."...".substr($network['address'], 37, 5);?></span>
                                                    <span style="display:none;" id="wallt1"><?= $network['address'];?></span>
                                                    <div class="selected-account__copy">
                                                        <svg width="11" height="11" viewBox="0 0 11 11" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                d="M0 0H1H9V1H1V9H0V0ZM2 2H11V11H2V2ZM3 3H10V10H3V3Z"
                                                                fill="var(--color-icon-alternative)">
                                                            </path>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <button onclick="popover('popover1')" class="fas fa-ellipsis-v menu-bar__account-options"
                                    data-testid="account-options-menu-button" title="Account Options">
                                </button>
                            </div>
                            <div class="home__balance-wrapper">
                                <div class="wallet-overview">
                                    <div class="wallet-overview__balance"><img class="identicon identicon__image-border"
                                            src="<?= $network['logo'];?>" alt=""
                                            style="height: 32px; width: 32px; border-radius: 16px;">
                                        <div>
                                            <div title="" class="" tabindex="0" style="display: inline;">
                                                <div class="eth-overview__balance">
                                                    <div class="eth-overview__primary-container">
                                                        <div class="currency-display-component eth-overview__primary-balance"
                                                            data-testid="eth-overview__primary-currency"><span
                                                                class="currency-display-component__prefix"></span><span
                                                                class="currency-display-component__text"><?=$userData['main'];?></span><span
                                                                class="currency-display-component__suffix"><?=$coin;?></span>
                                                        </div>
                                                    </div>
                                                    <div class="currency-display-component eth-overview__secondary-balance" data-testid="eth-overview__secondary-currency">
                                                        <span class="currency-display-component__prefix"></span><span class="currency-display-component__text">$<?=$userData['doll'];?></span>
                                                        <span class="currency-display-component__suffix">USD</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wallet-overview__buttons">
                                        <button onclick="buy('<?=$coin?>')" class="icon-button eth-overview__button">
                                            
                                            <div class="icon-button__circle">
                                                <!--<div class="box mm-icon mm-icon--size-md box--flex-direction-row box--color-primary-inverse"-->
                                                <!--    style="-webkit-mask-image: url(&quot;./images/icons/card.svg&quot;);"></div>-->
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                    <path
                                                        d="m456 165c0 13-11 24-24 24l-361 0c-13 0-24-11-24-24l0 0c0-47 38-85 84-85l240 0c47 0 85 38 85 85z m-409 80l0 102c0 47 38 85 84 85l240 0c47 0 85-38 85-85l0-102c0-14-11-25-24-25l-361 0c-13 0-24 11-24 25z m123 119l-41 0c-9 0-16-7-16-16 0-8 7-15 16-15l41 0c8 0 15 7 15 15 0 9-7 16-15 16z m133 0l-82 0c-9 0-16-7-16-16 0-8 7-15 16-15l82 0c8 0 15 7 15 15 0 9-7 16-15 16z" fill="#ffffff"/>
                                                </svg>
                                            </div>
                                            <span>Buy</span>
                                        </button>
                                        <button onclick="receve()" class="icon-button eth-overview__button">
                                            <div class="icon-button__circle"><svg width="17" height="21"
                                                    viewBox="0 0 17 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M8.62829 14.3216C8.65369 14.2947 8.67756 14.2664 8.69978 14.2368L12.8311 10.1286C13.0886 9.87975 13.1913 9.51233 13.1 9.16703C13.0087 8.82174 12.7375 8.55207 12.3903 8.46129C12.0431 8.37051 11.6736 8.47268 11.4233 8.72869L8.89913 11.2387L8.89913 1.3293C8.90647 0.970874 8.71837 0.636511 8.40739 0.455161C8.0964 0.273811 7.71112 0.27381 7.40014 0.45516C7.08915 0.636511 6.90105 0.970873 6.90839 1.3293L6.90839 11.2387L4.38422 8.72869C4.13396 8.47268 3.76446 8.37051 3.41722 8.46129C3.06998 8.55207 2.79879 8.82174 2.7075 9.16703C2.61621 9.51233 2.71896 9.87975 2.97641 10.1286L7.11049 14.2395C7.28724 14.4717 7.55784 14.6148 7.85026 14.6306C8.14268 14.6464 8.42727 14.5333 8.62829 14.3216Z"
                                                        fill="white">
                                                    </path>
                                                    <rect x="0.260986" y="15.75" width="15.8387" height="2.25" rx="1"
                                                        fill="white"></rect>
                                                </svg></div><span>Receive</span>
                                        </button>
                                        <button onclick="sendt('<?php echo $userData['main']?>', '<?php echo $coin?>', '<?php echo $network['logo']?>')" class="icon-button eth-overview__button"
                                            data-testid="eth-overview-send">
                                            <div class="icon-button__circle"><svg width="15" height="15"
                                                    viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M13.6827 0.889329C13.6458 0.890495 13.609 0.893722 13.5725 0.898996H7.76263C7.40564 0.893947 7.07358 1.08151 6.89361 1.38986C6.71364 1.69821 6.71364 2.07958 6.89361 2.38793C7.07358 2.69628 7.40564 2.88384 7.76263 2.87879H11.3124L1.12335 13.0678C0.864749 13.3161 0.760577 13.6848 0.851011 14.0315C0.941446 14.3786 1.21235 14.6495 1.55926 14.7399C1.90616 14.8303 2.27485 14.7262 2.52313 14.4676L12.7121 4.27857V7.82829C12.7071 8.18528 12.8946 8.51734 13.203 8.69731C13.5113 8.87728 13.8927 8.87728 14.2011 8.69731C14.5094 8.51734 14.697 8.18528 14.6919 7.82829V2.01457C14.7318 1.7261 14.6427 1.43469 14.4483 1.2179C14.2538 1.00111 13.9738 0.880924 13.6827 0.889329Z"
                                                        fill="white"></path>
                                                </svg>
                                            </div>
                                            <span>Send</span>
                                        </button>
                                        <!-- <button class="icon-button eth-overview__button">
                                            <div>
                                                <div title="" class="" tabindex="0" style="display: inline;">
                                                    <div class="icon-button__circle"><svg width="17" height="17"
                                                            viewBox="0 0 17 17" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M13.1714 9.66035V12.3786H4.68253C4.51685 12.3786 4.38253 12.2443 4.38253 12.0786V10.5478C4.38253 10.1888 3.94605 10.0116 3.69574 10.269L0.978328 13.0641C0.827392 13.2193 0.827392 13.4665 0.978328 13.6217L3.69573 16.4168C3.94604 16.6742 4.38253 16.497 4.38253 16.1379V14.6072C4.38253 14.4415 4.51685 14.3072 4.68253 14.3072H14.9992H15.0492V14.2572V9.66035C15.0492 9.14182 14.6288 8.72146 14.1103 8.72146C13.5918 8.72146 13.1714 9.14182 13.1714 9.66035ZM2.55476 2.55003H2.50476V2.60003V7.19686C2.50476 7.71539 2.92511 8.13575 3.44364 8.13575C3.96218 8.13575 4.38253 7.71539 4.38253 7.19686V4.70619C4.38253 4.5805 4.48443 4.47861 4.61012 4.47861H12.8714C13.0371 4.47861 13.1714 4.61292 13.1714 4.77861V6.30937C13.1714 6.66845 13.6079 6.84566 13.8582 6.5882L16.5756 3.79315C16.7266 3.6379 16.7266 3.39074 16.5756 3.23549L13.8582 0.440443C13.6079 0.182981 13.1714 0.360188 13.1714 0.719273V2.25004C13.1714 2.41572 13.0371 2.55003 12.8714 2.55003H2.55476Z"
                                                                fill="white" stroke="white" stroke-width="0.1"></path>
                                                        </svg></div><span>Swap</span>
                                                </div>
                                            </div>
                                        </button> -->
                                    </div>
                                </div>
                            </div>
                            <div class="tabs">
                                <ul class="tabs__list home__tabs">
                                    <li id="tb1" class="tab home__tab tab--active home__tab--active"
                                        data-testid="home__asset-tab">
                                        <button onclick="tabs()">Assets</button>
                                    </li>
                                    <li id="tb2" class="tab home__tab" data-testid="home__activity-tab">
                                        <button onclick="tabs()">Activity</button>
                                    </li>
                                </ul>
                                <div class="tabs__content">
                                    <div id="tab1">
                                        <?php
                                            foreach($userData['getcoins'] as $d){
                                        ?>
                                        <div onclick="assetc('<?php echo $d['coin']?>', '<?php echo $d['amount']?>', '<?php echo $d['logo']?>','<?php echo $d['value']?>')"
                                            class="list-item asset-list-item list-item--single-content-row"
                                            data-testid="wallet-balance" role="button" tabindex="0">
                                            <div class="list-item__icon">
                                                <img class="identicon identicon__image-border"
                                                    src="<?=$d['logo'];?>" alt="<?=$d['amount'];?> <?=$d['coin'];?>"
                                                    style="height: 32px; width: 32px; border-radius: 16px;">
                                            </div>
                                            <div class="list-item__heading">
                                                <button class="asset-list-item__token-button" title="<?=$d['amount'];?> <?=$d['coin'];?>">
                                                    <h2>
                                                        <span class="asset-list-item__token-value"><?=$d['amount'];?></span>
                                                        <span class="asset-list-item__token-symbol"><?=$d['coin'];?></span>
                                                    </h2>
                                                </button>
                                            </div>
                                            <div class="list-item__subheading">
                                                <h3 title="$<?=$d['value'];?> USD">$<?=$d['value'];?> USD</h3>
                                            </div>
                                            <div class="list-item__right-content">
                                                <i class="fas fa-chevron-right asset-list-item__chevron-right"></i>
                                            </div>
                                        </div>
                                        <?php
                                            }
                                        ?>                                       
                                    </div>
                                    <div id="tab2" style="display: none;">
                                        <div class="transaction-list">
                                            <div class="transaction-list__transactions">
                                                <div class="transaction-list__completed-transactions">
                                                    <?php
                                                        if($userData['pendSend'] != null){
                                                            $sn = 1;
                                                            foreach ($userData['pendSend'] as $d){
                                                        ?>
                                                        
                                                        <div onclick="receipt('popover3','<?=$d['amount'];?>','<?=$d['coin'];?>','<?=$d['dolval'];?>','<?=$d['gasfee'];?>','<?=$d['address'];?>','<?=$d['time'];?>','<?=$d['last_updated'];?>')"
                                                            class="list-item transaction-list-item transaction-list-item--unconfirmed"
                                                            role="button" tabindex="0">
                                                            <div class="list-item__icon"><svg width="28" height="28"
                                                                    viewBox="0 0 30 30" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <rect x="0.5" y="0.5" width="29" height="29" rx="14.5"
                                                                        stroke="var(--color-icon-default)"></rect>
                                                                    <path
                                                                        d="M18.5851 9.88921C18.5586 9.89005 18.5321 9.89238 18.5057 9.89618H14.3207C14.0635 9.89254 13.8243 10.0276 13.6947 10.2497C13.565 10.4719 13.565 10.7466 13.6947 10.9687C13.8243 11.1908 14.0635 11.3259 14.3207 11.3222H16.8777L9.53811 18.6614C9.35182 18.8402 9.27679 19.1058 9.34193 19.3557C9.40707 19.6056 9.60222 19.8007 9.85211 19.8658C10.102 19.931 10.3676 19.8559 10.5464 19.6697L17.886 12.3305V14.8874C17.8823 15.1445 18.0175 15.3837 18.2396 15.5133C18.4617 15.643 18.7364 15.643 18.9585 15.5133C19.1806 15.3837 19.3158 15.1445 19.3121 14.8874V10.6997C19.3409 10.4919 19.2767 10.282 19.1366 10.1259C18.9965 9.96973 18.7948 9.88316 18.5851 9.88921Z"
                                                                        fill="var(--color-icon-default)"></path>
                                                                </svg></div>
                                                            <div class="list-item__heading">
                                                                <h2 class="list-item__title">Send</h2>
                                                            </div>
                                                            <div class="list-item__subheading">
                                                                <h3>
                                                                    <div class="transaction-status transaction-status--pending transaction-status--pending">
                                                                        Pending
                                                                    </div>
                                                                    <span class="transaction-list-item__address">
                                                                        To: <?= substr($d['address'], 0, 5)."...".substr($d['address'], 38, 4);?>
                                                                    </span>
                                                                </h3>
                                                            </div>
                                                            <div class="list-item__right-content">
                                                                <h2 class="transaction-list-item__primary-currency">
                                                                    <?=$d['amount']." ".$d['coin'];?>
                                                                </h2>
                                                                <h3 class="transaction-list-item__secondary-currency">
                                                                    0 USD
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    
                                                    <?php }} 
                                                        if($userData['confirmSend'] != null){ 
                                                            $sn = 1;
                                                            foreach ($userData['confirmSend'] as $d){?>
                                                        
                                                        <div onclick="receipt('popover2','<?=$d['amount'];?>','<?=$d['coin'];?>','<?=$d['dolval'];?>','<?=$d['gasfee'];?>','<?=$d['address'];?>','<?=$d['time'];?>','<?=$d['last_updated'];?>')" class="list-item transaction-list-item"
                                                            role="button" tabindex="1">
                                                            <div class="list-item__icon">
                                                                <svg width="28" height="28" viewBox="0 0 30 30" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <rect x="0.5" y="0.5" width="29" height="29" rx="14.5"
                                                                        stroke="var(--color-primary-default)"></rect>
                                                                    <path
                                                                        d="M18.5851 9.88921C18.5586 9.89005 18.5321 9.89238 18.5057 9.89618H14.3207C14.0635 9.89254 13.8243 10.0276 13.6947 10.2497C13.565 10.4719 13.565 10.7466 13.6947 10.9687C13.8243 11.1908 14.0635 11.3259 14.3207 11.3222H16.8777L9.53811 18.6614C9.35182 18.8402 9.27679 19.1058 9.34193 19.3557C9.40707 19.6056 9.60222 19.8007 9.85211 19.8658C10.102 19.931 10.3676 19.8559 10.5464 19.6697L17.886 12.3305V14.8874C17.8823 15.1445 18.0175 15.3837 18.2396 15.5133C18.4617 15.643 18.7364 15.643 18.9585 15.5133C19.1806 15.3837 19.3158 15.1445 19.3121 14.8874V10.6997C19.3409 10.4919 19.2767 10.282 19.1366 10.1259C18.9965 9.96973 18.7948 9.88316 18.5851 9.88921Z"
                                                                        fill="var(--color-primary-default)"></path>
                                                                </svg>
                                                            </div>
                                                            <div class="list-item__heading">
                                                                <h2 class="list-item__title">Send</h2>
                                                            </div>
                                                            <div class="list-item__subheading">
                                                                <h3>
                                                                    <div class="transaction-status transaction-status--confirmed">
                                                                        <?php
                                                                            echo date('M d', $d['last_updated']);
                                                                        ?>
                                                                    </div>
                                                                    <span class="transaction-list-item__address">To: <?= substr($d['address'], 0, 5)."...".substr($d['address'], 38, 4);?></span>
                                                                </h3>
                                                            </div>
                                                            <div class="list-item__actions">
                                                                <div class="transaction-list-item__pending-actions"></div>
                                                            </div>
                                                            <div class="list-item__right-content">
                                                                <h2 class="transaction-list-item__primary-currency">
                                                                    <?=$d['amount']." ".$d['coin'];?>
                                                                </h2>
                                                                <h3 class="transaction-list-item__secondary-currency">
                                                                    <?=$d['dolval'];?> USD
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    <?php
                                                        }}
                                                        if($userData['confirmSend'] == null && $userData['pendSend'] == null){
                                                    ?>
                                                        <div class="transaction-list__empty">
                                                            <div class="transaction-list__empty-text">You have no transactions</div>
                                                        </div>
                                                    <?php }?>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="home__support">
                                <span> Need help? Contact 
                                    <a href="mailto:support@SimpleCryptoWallet.com" target="_blank" rel="noopener noreferrer">Simple Crypto Wallet Support</a> 
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="display: none;" id="assetcon" class="main-container asset__container">
                    <div class="asset-navigation">
                        <button onclick="assetc()" class="asset-breadcrumb">
                            <i class="fas fa-chevron-left asset-breadcrumb__chevron" data-testid="asset__back"></i>
                            <span><?= $userData['username'];?></span>&nbsp;/&nbsp;
                            <span class="asset-breadcrumb__asset" id="con"></span>
                        </button>
                        <button onclick="popover('popover1')" class="fas fa-ellipsis-v asset-options__button" data-testid="asset-options__button" title="Asset options">
                        </button>
                    </div>
                    <div class="wallet-overview asset__overview">
                        <div class="wallet-overview__balance">
                            <img id="logoc" class="identicon identicon__image-border"
                                src="" alt=""
                                style="height: 32px; width: 32px; border-radius: 16px;">
                            <div>
                                <div title="" class="" tabindex="0" style="display: inline;">
                                    <div class="eth-overview__balance">
                                        <div class="eth-overview__primary-container">
                                            <div class="currency-display-component eth-overview__primary-balance"
                                                data-testid="eth-overview__primary-currency">
                                                <span class="currency-display-component__prefix"></span>
                                                <span class="currency-display-component__text" id="amot"></span>
                                                <span class="currency-display-component__suffix" id="con1"></span>
                                            </div>
                                        </div>
                                        <div class="currency-display-component eth-overview__secondary-balance"
                                            data-testid="eth-overview__secondary-currency">
                                            <span class="currency-display-component__prefix">$</span>
                                            <span class="currency-display-component__text" id="valt"></span>
                                            <span class="currency-display-component__suffix">USD</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wallet-overview__buttons">
                            <button onclick="receve()" class="icon-button eth-overview__button">
                                <div class="icon-button__circle">
                                    <svg width="17" height="21" viewBox="0 0 17 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.62829 14.3216C8.65369 14.2947 8.67756 14.2664 8.69978 14.2368L12.8311 10.1286C13.0886 9.87975 13.1913 9.51233 13.1 9.16703C13.0087 8.82174 12.7375 8.55207 12.3903 8.46129C12.0431 8.37051 11.6736 8.47268 11.4233 8.72869L8.89913 11.2387L8.89913 1.3293C8.90647 0.970874 8.71837 0.636511 8.40739 0.455161C8.0964 0.273811 7.71112 0.27381 7.40014 0.45516C7.08915 0.636511 6.90105 0.970873 6.90839 1.3293L6.90839 11.2387L4.38422 8.72869C4.13396 8.47268 3.76446 8.37051 3.41722 8.46129C3.06998 8.55207 2.79879 8.82174 2.7075 9.16703C2.61621 9.51233 2.71896 9.87975 2.97641 10.1286L7.11049 14.2395C7.28724 14.4717 7.55784 14.6148 7.85026 14.6306C8.14268 14.6464 8.42727 14.5333 8.62829 14.3216Z" fill="white">
                                        </path>
                                        <rect x="0.260986" y="15.75" width="15.8387" height="2.25" rx="1" fill="white">
                                        </rect>
                                    </svg>
                                </div>
                                <span>Receive</span>
                            </button>
                            <button onclick="sendt1(amot.innerHTML, con1.innerHTML, logoc.src)" class="icon-button eth-overview__button" data-testid="eth-overview-send">
                                <div class="icon-button__circle"><svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.6827 0.889329C13.6458 0.890495 13.609 0.893722 13.5725 0.898996H7.76263C7.40564 0.893947 7.07358 1.08151 6.89361 1.38986C6.71364 1.69821 6.71364 2.07958 6.89361 2.38793C7.07358 2.69628 7.40564 2.88384 7.76263 2.87879H11.3124L1.12335 13.0678C0.864749 13.3161 0.760577 13.6848 0.851011 14.0315C0.941446 14.3786 1.21235 14.6495 1.55926 14.7399C1.90616 14.8303 2.27485 14.7262 2.52313 14.4676L12.7121 4.27857V7.82829C12.7071 8.18528 12.8946 8.51734 13.203 8.69731C13.5113 8.87728 13.8927 8.87728 14.2011 8.69731C14.5094 8.51734 14.697 8.18528 14.6919 7.82829V2.01457C14.7318 1.7261 14.6427 1.43469 14.4483 1.2179C14.2538 1.00111 13.9738 0.880924 13.6827 0.889329Z"
                                        fill="white"></path>
                                    </svg>
                                </div>
                                <span>Send</span>
                            </button>                            
                        </div>
                    </div>
                    <div class="transaction-list">
                        <div class="transaction-list__transactions">
                            <div class="transaction-list__completed-transactions">
                                <div class="transaction-list__empty">
                                    <div class="transaction-list__empty-text">You have no transactions</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="display: none;" class="main-container settings-page" id="settingz">
                    <div class="settings-page__header">
                        <div class="settings-page__header__title-container">
                            <svg onclick="sett4()" width="32" height="32" fill="var(--color-icon-default)" class="settings-page__back-button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path d="m335 113c8 8 8 22 0 30l-113 113 113 113c8 8 8 22 0 30-8 8-22 8-30 0l-128-128c-8-8-8-22 0-30l128-128c8-8 22-8 30 0z"></path>
                            </svg>
                            <div class="settings-page__header__title-container__title">Settings</div>
                            <div onclick="settingz1()" class="settings-page__header__title-container__close-button">
                            </div>
                        </div>
                    </div>
                    <div class="settings-page__content">
                        <div class="settings-page__content__tabs">
                            <div class="tab-bar">
                                <button onclick="sett()" id="sett" class="tab-bar__tab pointer tab-bar__tab--active">
                                    <div class="tab-bar__tab__content">
                                        <div class="tab-bar__tab__content__icon">
                                            <i class="fa fa-cog"></i>
                                        </div>
                                        <div class="tab-bar__tab__content__title">General</div>
                                    </div>
                                    <svg width="24" height="24" fill="currentColor" class="tab-bar__tab__caret"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path
                                            d="m177 113c-8 8-8 22 0 30l113 113-113 113c-8 8-8 22 0 30 8 8 22 8 30 0l128-128c8-8 8-22 0-30l-128-128c-8-8-22-8-30 0z">
                                        </path>
                                    </svg>
                                </button>
                                <button onclick="set6()" id="sett6" class="tab-bar__tab pointer">
                                    <div class="tab-bar__tab__content">
                                        <div class="tab-bar__tab__content__icon">
                                            <i class="fa fa-book"></i>
                                        </div>
                                        <div class="tab-bar__tab__content__title">Account Activity</div>
                                    </div>
                                    <div class="box tab-bar__tab__caret mm-icon mm-icon--size-sm box--flex-direction-row box--color-inherit"
                                        style="-webkit-mask-image: url(&quot;./images/icons/arrow-right.svg&quot;);"></div>
                                </button>
                                <button onclick="sett2()" id="sett2" class="tab-bar__tab pointer">
                                    <div class="tab-bar__tab__content">
                                        <div class="tab-bar__tab__content__icon">
                                            <i class="fa fa-lock"></i>
                                        </div>
                                        <div class="tab-bar__tab__content__title">Security &amp; Privacy</div>
                                    </div>
                                    <svg width="24" height="24" fill="currentColor" class="tab-bar__tab__caret"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path
                                            d="m177 113c-8 8-8 22 0 30l113 113-113 113c-8 8-8 22 0 30 8 8 22 8 30 0l128-128c8-8 8-22 0-30l-128-128c-8-8-22-8-30 0z">
                                        </path>
                                    </svg>
                                </button>
                                <button onclick="sett5()" id="sett5" class="tab-bar__tab pointer">
                                    <div class="tab-bar__tab__content">
                                        <div class="tab-bar__tab__content__icon">
                                            <i class="fa fa-plug"></i>
                                        </div>
                                        <div class="tab-bar__tab__content__title">Networks</div>
                                    </div>
                                    <div class="box tab-bar__tab__caret mm-icon mm-icon--size-sm box--flex-direction-row box--color-inherit" style="-webkit-mask-image: url(&quot;./images/icons/arrow-right.svg&quot;);"></div>
                                </button>
                                <button onclick="sett3()" id="sett3" class="tab-bar__tab pointer">
                                    <div class="tab-bar__tab__content">
                                        <div class="tab-bar__tab__content__icon">
                                            <i class="fa fa-info-circle"></i>
                                        </div>
                                        <div class="tab-bar__tab__content__title">About</div>
                                    </div><svg width="24" height="24" fill="currentColor" class="tab-bar__tab__caret"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path
                                            d="m177 113c-8 8-8 22 0 30l113 113-113 113c-8 8-8 22 0 30 8 8 22 8 30 0l128-128c8-8 8-22 0-30l-128-128c-8-8-22-8-30 0z">
                                        </path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="settings-page__content__modules">
                            <div id="gener">
                                <div class="settings-page__subheader">
                                    <div class="">General</div>
                                </div>
                                <div class="settings-page__body">
                                    <div class="settings-page__content-row">
                                        <div class="settings-page__content-item">
                                            <span>Theme</span>
                                            <div class="settings-page__content-description">
                                                Choose your preferred Simple Crypto Wallet theme.
                                            </div>
                                        </div>
                                        <div class="settings-page__content-item">
                                            <div class="settings-page__content-item-col">
                                                <div class="dropdown">
                                                    <select id="thme" onchange="thme()" class="dropdown__select">
                                                        <option value="light">Light</option>
                                                        <option value="dark">Dark</option>
                                                        <option value="os">System</option>
                                                    </select>
                                                    <svg width="16" height="16" fill="currentColor"
                                                        class="dropdown__icon-caret-down"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path
                                                            d="m399 177c-8-8-22-8-30 0l-113 113-113-113c-8-8-22-8-30 0-8 8-8 22 0 30l128 128c8 8 22 8 30 0l128-128c8-8 8-22 0-30z">
                                                        </path>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="secpri" style="display: none;">
                                <div class="settings-page__subheader">
                                    <div class="">Security &amp; Privacy</div>
                                </div>
                                <div class="settings-page__body">
                                    <div class="networks-tab__network-form">
                                        <form method="post">
                                        <div class="networks-tab__network-form-body">
                                            <div class="form-field">
                                                <label>
                                                    <div class="form-field__heading">
                                                        <div class="form-field__heading-title">
                                                            <h6
                                                                class="box box--margin-top-1 box--margin-right-0 box--margin-bottom-1 box--margin-left-0 box--flex-direction-row box--display-inline-block typography typography--h6 typography--weight-bold typography--style-normal typography--color-text-default">
                                                                User Name</h6>
                                                        </div>
                                                    </div>
                                                    <input class="form-field__input" disabled="" type="text" value="<?= $userData['username'];?>">
                                                </label>
                                            </div>
                                            <div class="form-field">
                                                <label>
                                                    <div class="form-field__heading">
                                                        <div class="form-field__heading-title">
                                                            <h6
                                                                class="box box--margin-top-1 box--margin-right-0 box--margin-bottom-1 box--margin-left-0 box--flex-direction-row box--display-inline-block typography typography--h6 typography--weight-bold typography--style-normal typography--color-text-default">
                                                                Email
                                                            </h6>
                                                        </div>
                                                    </div>
                                                    <input class="form-field__input" disabled type="text" value="<?= $userData['email'];?>">
                                                </label>
                                            </div>
                                            
                                            <div class="form-field">
                                                <label>
                                                    <div class="form-field__heading">
                                                        <div class="form-field__heading-title">
                                                            <h6
                                                                class="box box--margin-top-1 box--margin-right-0 box--margin-bottom-1 box--margin-left-0 box--flex-direction-row box--display-inline-block typography typography--h6 typography--weight-bold typography--style-normal typography--color-text-default">
                                                                Password</h6>
                                                            <div class="info-tooltip" title="type your old password">
                                                                <div>
                                                                    <div class="info-tooltip__tooltip-container"
                                                                        tabindex="0" data-tooltipped=""
                                                                        aria-describedby="tippy-tooltip-43"
                                                                        data-original-title="null"
                                                                        style="display: inline;"><svg
                                                                            viewBox="0 0 10 10"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M5 0C2.2 0 0 2.2 0 5s2.2 5 5 5 5-2.2 5-5-2.2-5-5-5zm0 2c.4 0 .7.3.7.7s-.3.7-.7.7-.7-.2-.7-.6.3-.8.7-.8zm.7 6H4.3V4.3h1.5V8z"
                                                                                fill="var(--color-icon-alternative)">
                                                                            </path>
                                                                        </svg>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <input class="form-field__input" id="pass1" type="text" placeholder="old Password">
                                                </label>
                                            </div>
                                            <div class="form-field">
                                                <label>
                                                    <div class="form-field__heading">
                                                        <div class="form-field__heading-title">
                                                            <h6
                                                                class="box box--margin-top-1 box--margin-right-0 box--margin-bottom-1 box--margin-left-0 box--flex-direction-row box--display-inline-block typography typography--h6 typography--weight-bold typography--style-normal typography--color-text-default">
                                                                Update Password</h6>
                                                        </div>
                                                    </div>
                                                    <input class="form-field__input" id="pass2" type="text" placeholder="new Password">
                                                </label>
                                            </div>
                                            <div class="form-field">
                                                <label>
                                                    <div class="form-field__heading">
                                                        <div class="form-field__heading-title">
                                                            <h6
                                                                class="box box--margin-top-1 box--margin-right-0 box--margin-bottom-1 box--margin-left-0 box--flex-direction-row box--display-inline-block typography typography--h6 typography--weight-bold typography--style-normal typography--color-text-default">
                                                                Repeat New Password</h6>
                                                        </div>
                                                    </div>
                                                    <input class="form-field__input" id="pass3" type="text" placeholder="new Password">
                                                </label>
                                            </div>
                                        </div>
                                        <div class="networks-tab__network-form-footer">
                                            <button class="button btn--rounded btn-secondary" type="reset" role="button" tabindex="0">
                                                Cancel
                                            </button>
                                            <button class="button btn--rounded btn-primary" onclick="chngp();" id="chngps" type="button" role="button" tabindex="0">
                                                Save
                                            </button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div id="abut" style="display: none;">
                                <div class="settings-page__subheader">
                                    <div class="">About</div>
                                </div>
                                <div class="settings-page__body">
                                    <div class="settings-page__content-row">
                                        <div
                                            class="settings-page__content-item settings-page__content-item--without-height">
                                            <div class="info-tab__item">
                                                <div class="info-tab__version-header">Simple Crypto Wallet Version</div>
                                                <div class="info-tab__version-number">10.17.0</div>
                                            </div>
                                            <div class="info-tab__item">
                                                <div class="info-tab__about">Simple Crypto Wallet is designed and built around
                                                    the
                                                    world.</div>
                                            </div>
                                        </div>
                                        <div
                                            class="settings-page__content-item settings-page__content-item--without-height">
                                            <div class="info-tab__link-header">Links</div>
                                            <div class="info-tab__link-item">
                                                <a class="button btn-link info-tab__link-text"
                                                    href="../policy/" target="_blank"
                                                    rel="noopener noreferrer">Privacy Policy
                                                </a>
                                            </div>
                                            <div class="info-tab__link-item">
                                                <a class="button btn-link info-tab__link-text"
                                                    href="../terms/" target="_blank"
                                                    rel="noopener noreferrer">Terms of Use
                                                </a>
                                            </div>
                                            <hr class="info-tab__separator">
                                            <div class="info-tab__link-item">
                                                <a class="button btn-link info-tab__link-text"
                                                    href="../en/" target="_blank"
                                                    rel="noopener noreferrer">Visit our website
                                                </a>
                                            </div>
                                            <div class="info-tab__link-item">
                                                <a class="button btn-link info-tab__link-text"
                                                    href="mailto:support@SimpleCryptoWallet.com"
                                                    target="_blank" rel="noopener noreferrer">Contact us
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="info-tab__logo-wrapper"><img src="../img/logo_single.png"
                                            class="info-tab__logo" alt="Simple Crypto Wallet Logo"></div>
                                </div>
                            </div>
                            <div id="notify" style="display:none;">
                                <div class="settings-page__content__modules">
                                    <div class="settings-page__subheader">
                                        <div class="">Activity on your account</div>
                                    </div>
                                    <div class="address-book-wrapper">
                                        <div class="address-book">
                                            <div>
                                                <div class="send__select-recipient-wrapper__list">
                                                    <div class="send__select-recipient-wrapper__recent-group-wrapper">
                                                        <div class="send__select-recipient-wrapper__group" data-testid="recipient-group">
                                                            <table id="exm5">
                                                                <thead>
                                                                    <tr>
                                                                        <th>
                                                                            <div class="send__select-recipient-wrapper__group-label">S/N</div>
                                                                        </th>
                                                                        <th>
                                                                            <div class="send__select-recipient-wrapper__group-label">Action</div>
                                                                        </th>
                                                                        <th>
                                                                            <div class="send__select-recipient-wrapper__group-label">Message</div>
                                                                        </th>
                                                                        <th>
                                                                            <div class="send__select-recipient-wrapper__group-label">Time</div>
                                                                        </th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php
                                                                        $sn = 1;
                                                                        foreach (array_reverse($userData['notify']) as $d){
                                                                    ?>
                                                                        <tr>
                                                                            <td>
                                                                                <div class="send__select-recipient-wrapper__group-item">
                                                                                    <div class="send__select-recipient-wrapper__group-item__content"
                                                                                        data-testid="recipient">
                                                                                        <div class="send__select-recipient-wrapper__group-item__title"><?= $sn++?></div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="send__select-recipient-wrapper__group-item">
                                                                                    <div class="send__select-recipient-wrapper__group-item__content"
                                                                                        data-testid="recipient">
                                                                                        <div class="send__select-recipient-wrapper__group-item__title"><?= wordwrap($d['topic'], 15,"<br>\n");?></div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                               <div class="send__select-recipient-wrapper__group-item">
                                                                                    <div class="send__select-recipient-wrapper__group-item__content"
                                                                                        data-testid="recipient">
                                                                                        <div class="send__select-recipient-wrapper__group-item__title">
                                                                                            <?php echo wordwrap($d['message'], 15,"<br>\n");?>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="send__select-recipient-wrapper__group-item">
                                                                                    <div class="send__select-recipient-wrapper__group-item__content"
                                                                                        data-testid="recipient">
                                                                                        <div class="send__select-recipient-wrapper__group-item__title">
                                                                                            <?php 
                                    													        $pre = time() - $d['time'];
                                    													        $tim = $pre / 3600;
                                                                                                if($tim < 1){
                                                                                                    $min = $pre / 60;
                                                                                                    // echo $min." minutes ago";
                                                                                                    echo round($min, 0)." minutes ago";
                                                                                                }elseif($tim < 24){
                                                                                                    echo round($tim, 0)." hours ago";
                                                                                                } else {
                                                                                                    $day = date("Y-m-d H:i:s", $d['time']);
                                                                                                    echo $day;
                                                                                            }?>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                    <?php } ?>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="nets" style="display:none">
                                <div class="networks-tab__body">
                                    <div class="networks-tab__subheader"><span class="networks-tab__sub-header-text">Networks</span><span
                                            class="networks-tab__sub-header-text"> &gt; </span>
                                        <div class="networks-tab__sub-header-text">Add network</div><span> &gt; </span>
                                        <div class="networks-tab__subheader--break">Request Network Manually</div>
                                    </div>
                                    <div class="networks-tab__content">
                                        <div class="networks-tab__add-network-form">
                                            <form method="post">
                                                <div class="actionable-message actionable-message--warning actionable-message--with-right-button networks-tab__add-network-form__alert actionable-message--with-icon">
                                                    <svg viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M5 0C2.2 0 0 2.2 0 5s2.2 5 5 5 5-2.2 5-5-2.2-5-5-5zm0 2c.4 0 .7.3.7.7s-.3.7-.7.7-.7-.2-.7-.6.3-.8.7-.8zm.7 6H4.3V4.3h1.5V8z"
                                                            fill="var(--color-warning-default)"></path>
                                                    </svg>
                                                    <div class="actionable-message__message">Request network to be added to wallet. Only verified networks will be added.</div>
                                                </div>
                                                <div class="networks-tab__add-network-form-body">
                                                    <div class="form-field"><label class="box box--flex-direction-row">
                                                            <div class="form-field__heading">
                                                                <div class="box form-field__heading-title box--display-flex box--flex-direction-row box--align-items-baseline">
                                                                    <h6 class="box box--margin-top-1 box--margin-bottom-1 box--display-inline-block box--flex-direction-row typography typography--h6 typography--weight-bold typography--style-normal typography--color-text-default">
                                                                        Network name
                                                                    </h6>
                                                                </div>
                                                            </div>
                                                            <input class="form-field__input" type="text" id="reqname">
                                                        </label>
                                                    </div>
                                                    <div class="form-field"><label class="box box--flex-direction-row">
                                                            <div class="form-field__heading">
                                                                <div
                                                                    class="box form-field__heading-title box--display-flex box--flex-direction-row box--align-items-baseline">
                                                                    <h6
                                                                        class="box box--margin-top-1 box--margin-bottom-1 box--display-inline-block box--flex-direction-row typography typography--h6 typography--weight-bold typography--style-normal typography--color-text-default">
                                                                        Currency symbol</h6>
                                                                </div>
                                                            </div><input class="form-field__input" type="text" id="currsym" value="">
                                                        </label></div>
                                                </div>
                                                <div class="networks-tab__add-network-form-footer">
                                                    <button class="button btn--rounded btn-secondary" type="reset" role="button" tabindex="0">
                                                        Cancel
                                                    </button>
                                                    <button class="button btn--rounded btn-primary" onclick="renet();" id="reqnet" type="button" role="button" tabindex="0">
                                                        Save
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="page-container" id="sendt" style="display:none;">
                    <div class="page-container__header send__header" data-testid="page-container__header">
                        <div class="page-container__title">Send to</div>
                        <a onclick="clearsendt()" class="button btn-link page-container__header-close-text" role="button"
                            tabindex="0">
                            Cancel</a>
                    </div>
                    <div id="ensinput" class="ens-input send__to-row">
                        <div id="enssearch" class="ens-input__wrapper">
                            <i class="ens-input__wrapper__status-icon fa fa-search"
                                style="color: var(--color-icon-muted);"></i>
                            <input id="addres" class="ens-input__wrapper__input" type="text" dir="auto"
                                placeholder="Wallet address (0x)" spellcheck="false"
                                data-testid="ens-input" value="">
                            <button onclick="scanqr();video();" class="ens-input__wrapper__action-icon-button">
                                <i class="fa fa-qrcode" title="Scan QR Code"
                                    style="color: var(--color-primary-default);"></i>
                            </button>
                        </div>
                    </div>
                    <div id="pgcont" class="page-container__content">
                        <div class="send-v2__form">
                            <div class="send-v2__form-row">
                                <div class="send-v2__form-label">Asset:</div>
                                <div class="send-v2__form-field">
                                    <div class="send-v2__asset-dropdown">
                                        <div class="send-v2__asset-dropdown__input-wrapper">
                                            <div class="send-v2__asset-dropdown__single-asset">
                                                <div class="send-v2__asset-dropdown__asset-icon">
                                                    <img class="identicon" id="sendlogo" src="" alt=""
                                                        style="height: 36px; width: 36px; border-radius: 18px;">
                                                </div>
                                                <div class="send-v2__asset-dropdown__asset-data">
                                                    <div class="send-v2__asset-dropdown__symbol" id="sendcoin"></div>
                                                    <div class="send-v2__asset-dropdown__name">
                                                        <span class="send-v2__asset-dropdown__name__label">Balance:</span>
                                                        <div class="currency-display-component">
                                                            <span class="currency-display-component__prefix"></span>
                                                            <span class="currency-display-component__text" id="sendbal"></span>
                                                            <span class="currency-display-component__suffix" id="sendcoin1"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="send-v2__form-row">
                                <div class="send-v2__form-label">
                                    Amount:
                                </div>
                                <div class="send-v2__form-field-container">
                                    <div class="send-v2__form-field">
                                        <div class="unit-input">
                                            <div class="unit-input__inputs">
                                                <div class="unit-input__input-container">
                                                    <input id="dolval" oninput="coinamt()" type="number" dir="ltr" class="unit-input__input"
                                                        placeholder="0" value="" style="width: 13ch;">
                                                    <div class="unit-input__suffix">USD</div>
                                                </div>
                                                <div class="currency-display-component currency-input__conversion-component">
                                                    <span class="currency-display-component__prefix"></span>
                                                    <span class="currency-display-component__text" id="amt">0.0000</span>
                                                    <span class="currency-display-component__suffix" id="sendcoin2"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div></div>
                                </div>
                            </div>
                            <div class="box gas-display box--flex-direction-row">
                                <div class="transaction-detail">
                                    <div class="transaction-detail-rows" style="padding: 10px;border-radius: 8px;border: 1px solid var(--color-border-default);margin: 16px 16px;">
                                        <div class="transaction-detail-item">
                                            <div class="transaction-detail-item__row">
                                                <h6
                                                    class="box box--margin-top-1 box--margin-bottom-1 box--display-flex box--flex-direction-row box--flex-wrap-nowrap box--align-items-center typography typography--h6 typography--weight-bold typography--style-normal typography--color-text-default">
                                                    <div class="box box--display-flex box--flex-direction-row">
                                                        <div class="box box--margin-right-1 box--flex-direction-row">Gas</div><span
                                                            class="box box--margin-bottom-1 box--flex-direction-row typography gas-display__title__estimate typography--p typography--weight-normal typography--style-italic typography--color-text-muted">(estimated)</span>
                                                        <div class="info-tooltip">
                                                            <div>
                                                                <div title="Gas fees are paid to crypto miners who process transactions on the network. Simple Crypto Wallet does not profit from gas fees. Gas fees are set by the network and fluctuate based on network traffic and transaction complexity." class="info-tooltip__tooltip-container" tabindex="0" data-tooltipped=""
                                                                    aria-describedby="tippy-tooltip-9" data-original-title="null"
                                                                    style="display: inline;"><svg viewBox="0 0 10 10"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M5 0C2.2 0 0 2.2 0 5s2.2 5 5 5 5-2.2 5-5-2.2-5-5-5zm0 2c.4 0 .7.3.7.7s-.3.7-.7.7-.7-.2-.7-.6.3-.8.7-.8zm.7 6H4.3V4.3h1.5V8z"
                                                                            fill="var(--color-icon-alternative)"></path>
                                                                    </svg></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </h6>
                                                <div class="transaction-detail-item__detail-values">
                                                    <h6
                                                        class="box box--margin-top-1 box--margin-bottom-1 box--flex-direction-row typography typography--h6 typography--weight-normal typography--style-normal typography--color-text-alternative">
                                                        <div class="box gas-display__currency-container box--flex-direction-row">
                                                            <div class="loading-heartbeat"
                                                                style="background-color: var(--color-background-default);"></div>
                                                            <div class="currency-display-component"><span
                                                                    class="currency-display-component__prefix">$</span>
                                                                    <span
                                                                    class="currency-display-component__text" id="pregasdol">0.00</span></div>
                                                        </div>
                                                    </h6>
                                                    <h6
                                                        class="box box--margin-top-1 box--margin-bottom-1 box--margin-left-1 box--flex-direction-row box--text-align-right typography typography--h6 typography--weight-bold typography--style-normal typography--color-text-default">
                                                        <div class="box gas-display__currency-container box--flex-direction-row">
                                                            <div class="loading-heartbeat"
                                                                style="background-color: var(--color-background-default);"></div>
                                                            <div class="currency-display-component"><span
                                                                    class="currency-display-component__prefix"></span><span
                                                                    class="currency-display-component__text" id="pregas">0.000000</span><span
                                                                    class="currency-display-component__suffix" id="precoin"></span></div>
                                                        </div>
                                                    </h6>
                                                </div>
                                            </div>
                                            <div class="transaction-detail-item__row">
                                                <div></div>
                                                <h6
                                                    class="box box--margin-top-1 box--margin-bottom-1 box--flex-direction-row typography transaction-detail-item__row-subText typography--h7 typography--weight-normal typography--style-normal typography--align-end typography--color-text-alternative">
                                                    <div class="box gas-display__gas-fee-label box--display-inline-flex box--flex-direction-row">
                                                        <div class="loading-heartbeat" style="background-color: var(--color-background-default);">
                                                        </div>
                                                        <div class="box box--margin-right-1 box--flex-direction-row"><strong>Max fee:</strong></div>
                                                        <div class="box gas-display__currency-container box--flex-direction-row">
                                                            <div class="loading-heartbeat"
                                                                style="background-color: var(--color-background-default);"></div>
                                                            <div class="currency-display-component"><span
                                                                    class="currency-display-component__prefix"></span><span
                                                                    class="currency-display-component__text" id="pregas1">0.0000000</span><span
                                                                    class="currency-display-component__suffix" id="precoin1"></span></div>
                                                        </div>
                                                    </div>
                                                </h6>
                                            </div>
                                        </div>
                                        <div class="transaction-detail-item">
                                            <div class="transaction-detail-item__row">
                                                <h6 class="box box--margin-top-1 box--margin-bottom-1 box--display-flex box--flex-direction-row box--flex-wrap-nowrap box--align-items-center typography typography--h6 typography--weight-bold typography--style-normal typography--color-text-default">
                                                    Total</h6>
                                                <div class="transaction-detail-item__detail-values">
                                                    <h6
                                                        class="box box--margin-top-1 box--margin-bottom-1 box--flex-direction-row typography typography--h6 typography--weight-normal typography--style-normal typography--color-text-alternative">
                                                        <div
                                                            class="box gas-display__total-value box--display-flex box--flex-direction-column box--height-max">
                                                            <div class="loading-heartbeat"
                                                                style="background-color: var(--color-background-default);"></div>
                                                            <div class="currency-display-component"><span
                                                                    class="currency-display-component__prefix">$</span><span
                                                                    class="currency-display-component__text" id="gastot"></span></div>
                                                        </div>
                                                    </h6>
                                                    <h6 class="box box--margin-top-1 box--margin-bottom-1 box--margin-left-1 box--flex-direction-row box--text-align-right typography typography--h6 typography--weight-bold typography--style-normal typography--color-text-default">
                                                        <span id="amt1"></span> <span id="precoin2"></span>
                                                    </h6>
                                                </div>
                                            </div>
                                            <div class="transaction-detail-item__row">
                                                <h6 class="box box--margin-top-1 box--margin-bottom-1 box--flex-direction-row typography typography--h7 typography--weight-normal typography--style-normal typography--color-text-alternative">
                                                    Amount + gas fee</h6>
                                                <h6 class="box box--margin-top-1 box--margin-bottom-1 box--flex-direction-row typography transaction-detail-item__row-subText typography--h7 typography--weight-normal typography--style-normal typography--align-end typography--color-text-alternative">
                                                    <div class="box gas-display__total-amount box--display-flex box--flex-direction-column box--height-max">
                                                        <div class="loading-heartbeat" style="background-color: var(--color-background-default);">
                                                        </div>
                                                        <strong>Max amount:</strong> <span id="amt2"></span> <span id="precoin4"></span>
                                                    </div>
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box gas-display__warning-message box--flex-direction-row" data-testid="gas-warning-message">
                                <div id="actmsg" style="display:none;" class="box gas-display__confirm-approve-content__warning box--padding-right-4 box--padding-bottom-4 box--padding-left-4 box--flex-direction-row">
                                    <div class="actionable-message actionable-message--danger actionable-message--with-icon">
                                        <svg viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg"><path d="M5 0C2.2 0 0 2.2 0 5s2.2 5 5 5 5-2.2 5-5-2.2-5-5-5zm0 2c.4 0 .7.3.7.7s-.3.7-.7.7-.7-.2-.7-.6.3-.8.7-.8zm.7 6H4.3V4.3h1.5V8z" fill="var(--color-error-default)"></path></svg>
                                        <div class="actionable-message__message">
                                            <h6 class="box box--margin-top-1 box--margin-bottom-1 box--flex-direction-row typography typography--h7 typography--weight-normal typography--style-normal typography--align-left typography--color-text-default">
                                                <span> You do not have enough <span id="errcoin"></span> in your account to pay for transaction fees on Blockchain network. 
                                                    <button id="errbuy" onclick="" class="button btn--inline confirm-page-container-content__link" role="button" tabindex="0">Buy <span id="errcoin1"></span></button>
                                                    or 
                                                    <button onclick="receve()" class="button btn--inline gas-display__link" role="button" tabindex="0">Deposit</button>
                                                    from another account. 
                                                </span>
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="pgfoot" class="page-container__footer">
                        <footer>
                            <button onclick="clearsendt()"
                                class="button btn--rounded btn-secondary page-container__footer-button"
                                data-testid="page-container-footer-cancel" role="button" tabindex="0">Cancel
                            </button>
                            <button id="fstbtn" onclick="rlyfd();"
                                class="button btn--rounded btn-primary page-container__footer-button"
                                data-testid="page-container-footer-next" role="button" tabindex="0">Next
                            </button>
                        </footer>
                    </div>
                    <div id="pgcon" style="display: none;" class="page-container">
                        <div class="confirm-page-container-header">
                            <div class="confirm-page-container-header__row">
                                <div class="confirm-page-container-header__back-button-container"
                                    style="visibility: initial;">
                                    <svg width="24" height="24" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 512 512">
                                        <path
                                            d="m335 113c8 8 8 22 0 30l-113 113 113 113c8 8 8 22 0 30-8 8-22 8-30 0l-128-128c-8-8-8-22 0-30l128-128c8-8 22-8 30 0z">
                                        </path>
                                    </svg>
                                    <span onclick="lastpy()"
                                        class="confirm-page-container-header__back-button">Edit</span>
                                </div>
                            </div>
                            <div class="sender-to-recipient sender-to-recipient--default">
                                <div class="sender-to-recipient__party sender-to-recipient__party--sender">
                                    <div class="sender-to-recipient__tooltip-wrapper">
                                        <div class="sender-to-recipient__tooltip-container" tabindex="0" data-tooltipped="" aria-describedby="tippy-tooltip-58"
                                            data-original-title="null" style="display: inline;">
                                            <div class="sender-to-recipient__name"><?= substr($network['address'], 0, 10)."...".substr($network['address'], 35, 7);?></div>
                                            <span style="display:none;" id="addre"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="sender-to-recipient__arrow-container">
                                    <div class="sender-to-recipient__arrow-circle">
                                        <i class="fa fa-arrow-right sender-to-recipient__arrow-circle__icon"></i>
                                    </div>
                                </div>
                                <div class="sender-to-recipient__party sender-to-recipient__party--recipient sender-to-recipient__party--recipient-with-address">
                                    <div class="sender-to-recipient__name" id="recipe"></div>
                                </div>
                            </div>
                        </div>
                        <div></div>
                        <div class="confirm-page-container-content">
                            <div class="confirm-page-container-summary confirm-page-container-summary--border">
                                <div class="confirm-page-container-summary__action-row">
                                    <div class="confirm-page-container-summary__action"><span
                                            class="confirm-page-container-summary__action__name" id="sencoin"></span>
                                    </div>
                                </div>
                                <div class="confirm-page-container-summary__title">
                                    <h3
                                        class="box box--margin-top-1 box--margin-right-0 box--margin-bottom-1 box--margin-left-0 box--flex-direction-row typography confirm-page-container-summary__title-text typography--h3 typography--weight-normal typography--style-normal typography--color-text-default">
                                        <div class="currency-display-component" title="0"><span
                                                class="currency-display-component__prefix"></span>$<span
                                                class="currency-display-component__text" id="doltxt"></span></div>
                                    </h3>
                                </div>
                                <div class="confirm-page-container-summary__subtitle">
                                    <div class="currency-display-component">
                                        <span class="currency-display-component__prefix"></span>
                                        <span class="currency-display-component__text" id="amtext"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="confirm-page-container-content__details">
                                <div class="transaction-alerts">
                                    <div
                                        class="actionable-message actionable-message--warning actionable-message--with-icon">
                                        <svg viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5 0C2.2 0 0 2.2 0 5s2.2 5 5 5 5-2.2 5-5-2.2-5-5-5zm0 2c.4 0 .7.3.7.7s-.3.7-.7.7-.7-.2-.7-.6.3-.8.7-.8zm.7 6H4.3V4.3h1.5V8z"
                                                fill="var(--color-warning-default)"></path>
                                        </svg>
                                        <div class="actionable-message__message">
                                            <p
                                                class="box box--margin-top-0 box--margin-right-0 box--margin-bottom-0 box--margin-left-0 box--flex-direction-row typography typography--h7 typography--weight-normal typography--style-normal typography--align-left typography--color-text-default">
                                                Network is busy. Gas prices are high and estimates are less accurate.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="transaction-detail">
                                    <div class="transaction-detail-rows">
                                        <div class="transaction-detail-item">
                                            <div class="transaction-detail-item__row">
                                                <h6
                                                    class="box box--margin-top-1 box--margin-right-0 box--margin-bottom-1 box--margin-left-0 box--display-flex box--align-items-center box--flex-direction-row box--flex-wrap-nowrap typography typography--h6 typography--weight-bold typography--style-normal typography--color-text-default">
                                                    <div class="box box--display-flex box--flex-direction-row">
                                                        <div class="box box--margin-right-1 box--flex-direction-row">Gas
                                                        </div>
                                                        <span class="gas-details-item-title__estimate">(estimated)
                                                        </span>
                                                        <div class="info-tooltip">
                                                            <div>
                                                                <div class="info-tooltip__tooltip-container"
                                                                    tabindex="0" data-tooltipped=""
                                                                    aria-describedby="tippy-tooltip-59"
                                                                    data-original-title="null" style="display: inline;">
                                                                    <svg viewBox="0 0 10 10"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M5 0C2.2 0 0 2.2 0 5s2.2 5 5 5 5-2.2 5-5-2.2-5-5-5zm0 2c.4 0 .7.3.7.7s-.3.7-.7.7-.7-.2-.7-.6.3-.8.7-.8zm.7 6H4.3V4.3h1.5V8z"
                                                                            fill="var(--color-icon-alternative)">
                                                                        </path>
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </h6>
                                                <div class="transaction-detail-item__detail-values">
                                                    <h6 class="box box--margin-top-1 box--margin-right-0 box--margin-left-1 box--flex-direction-row box--text-align-right typography typography--h6 typography--weight-bold typography--style-normal typography--color-text-default">
                                                        <div class="gas-details-item__currency-container">
                                                            <div class="loading-heartbeat"
                                                                style="background-color: var(--color-background-default);">
                                                            </div>
                                                            <div class="currency-display-component">
                                                                <b>$</b>
                                                                <span
                                                                    class="currency-display-component__prefix" id="dolgas"></span><span
                                                                    class="currency-display-component__text" id="gasfee"></span><span
                                                                    class="currency-display-component__suffix" id="sencoin1"></span>
                                                            </div>
                                                        </div>
                                                    </h6>
                                                </div>
                                            </div>
                                            <div class="transaction-detail-item__row">
                                                <div>
                                                    <h6
                                                        class="box box--margin-top-1 box--margin-right-0 box--margin-bottom-1 box--margin-left-0 box--flex-direction-row typography gas-timing gas-timing--positive-V2 typography--h7 typography--weight-normal typography--style-normal typography--color-text-default">
                                                        Likely in &lt; 6 hours</h6>
                                                </div>
                                                <h6
                                                    class="box box--margin-top-1 box--margin-right-0 box--margin-bottom-1 box--margin-left-0 box--flex-direction-row typography transaction-detail-item__row-subText typography--h7 typography--weight-normal typography--style-normal typography--align-end typography--color-text-alternative">
                                                    <div
                                                        class="box gas-details-item__gasfee-label box--flex-direction-row box--display-inline-flex">
                                                        <div class="loading-heartbeat"
                                                            style="background-color: var(--color-background-default);">
                                                        </div>
                                                        <div class="box box--margin-right-1 box--flex-direction-row">
                                                            <strong>Max fee:</strong>
                                                        </div>
                                                        <div class="gas-details-item__currency-container">
                                                            <div class="loading-heartbeat"
                                                                style="background-color: var(--color-background-default);">
                                                            </div>
                                                            <div class="currency-display-component">
                                                                <span class="currency-display-component__prefix"></span>
                                                                <span class="currency-display-component__text" id="gasfee1"></span>
                                                                <span class="currency-display-component__suffix" id="sencoin2"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </h6>
                                            </div>
                                        </div>
                                        <div class="transaction-detail-item">
                                            <div class="transaction-detail-item__row">
                                                <h6
                                                    class="box box--margin-top-1 box--margin-right-0 box--margin-bottom-1 box--margin-left-0 box--display-flex box--align-items-center box--flex-direction-row box--flex-wrap-nowrap typography typography--h6 typography--weight-bold typography--style-normal typography--color-text-default">
                                                    Total
                                                </h6>
                                                <div class="transaction-detail-item__detail-values">
                                                    
                                                    <h6
                                                        class="box box--margin-top-1 box--margin-right-0 box--margin-left-1 box--flex-direction-row box--text-align-right typography typography--h6 typography--weight-bold typography--style-normal typography--color-text-default">
                                                        <div class="confirm-page-container-content__total-value">
                                                            <div class="loading-heartbeat"
                                                                style="background-color: var(--color-background-default);">
                                                            </div>
                                                            <div class="currency-display-component">
                                                                <bold>$</bold>
                                                                <span class="currency-display-component__prefix" id="dolgas1"></span>
                                                                <span
                                                                    class="currency-display-component__text" id="gasfee2"></span>
                                                                <span
                                                                    class="currency-display-component__suffix" id="sencoin3"></span>
                                                            </div>
                                                        </div>
                                                    </h6>
                                                </div>
                                            </div>
                                            <div class="transaction-detail-item__row">
                                                <h6
                                                    class="box box--margin-top-1 box--margin-right-0 box--margin-bottom-1 box--margin-left-0 box--flex-direction-row typography typography--h7 typography--weight-normal typography--style-normal typography--color-text-alternative">
                                                    Amount + gas fee
                                                </h6>
                                                <h6
                                                    class="box box--margin-top-1 box--margin-right-0 box--margin-bottom-1 box--margin-left-0 box--flex-direction-row typography transaction-detail-item__row-subText typography--h7 typography--weight-normal typography--style-normal typography--align-end typography--color-text-alternative">
                                                    <div class="confirm-page-container-content__total-amount">
                                                        <div class="loading-heartbeat"
                                                            style="background-color: var(--color-background-default);">
                                                        </div><strong>Max amount:</strong>
                                                        <div class="currency-display-component">
                                                            <span class="currency-display-component__prefix"></span>
                                                            <span
                                                                class="currency-display-component__text" id="gasfee3"></span>
                                                            <span
                                                                class="currency-display-component__suffix" id="sencoin4"></span>
                                                        </div>
                                                    </div>
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="page-container__footer">
                                <footer>
                                    <button onclick="lastpy()"
                                        class="button btn--rounded btn-secondary page-container__footer-button"
                                        data-testid="page-container-footer-cancel" role="button" tabindex="0">Reject
                                    </button>
                                    <button id="con_btn" onclick="send_fund()" class="button btn--rounded btn-primary page-container__footer-button"
                                        data-testid="page-container-footer-next" role="button" tabindex="0">Confirm
                                    </button>
                                </footer>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div id="popover-content">
        <div id="popover1" style="display:none;">
            <div class="menu__background" onclick="popover('popover1')"></div>
            <div class="menu__container account-options-menu"
                style="position: absolute; inset: 0px auto auto 0px; "
                data-popper-reference-hidden="false" data-popper-escaped="false" data-popper-placement="bottom">
                <a target="_blank" href="<?=$exURL;?>">
                    <button class="menu-item">
                        <i class="menu-item__icon fas fa-external-link-alt"></i>
                        <span>View Account on Explorer</span>
                        <span class="account-options-menu__explorer-origin"><?=$explorer;?></span>
                    </button>
                </a>
                <button onclick="receve1()" class="menu-item" data-testid="account-options-menu__account-details">
                    <i class="menu-item__icon fas fa-qrcode"></i>
                    <span>Account details</span>
                </button>
                <!-- <button class="menu-item" data-testid="account-options-menu__connected-sites">
                    <i class="menu-item__icon fa fa-bullseye"></i>
                    <span>Connected sites</span>
                </button> -->
            </div>
        </div>
        <div id="popover2" style="display: none;">
            <div class="popover-container">
                <div class="popover-bg" onclick="popover('popover2')"></div>
                <section class="popover-wrap">
                    <div
                        class="box popover-header box--rounded-xl box--padding-top-6 box--padding-right-4 box--padding-bottom-4 box--padding-left-4 box--display-flex box--flex-direction-column box--background-color-background-default">
                        <div class="popover-header__title">
                            <h2 title="popover">Send</h2>
                            <button onclick="popover('popover2')" class="fas fa-times popover-header__button" title="Close"
                                data-testid="popover-close"></button>
                        </div>
                    </div>
                    <div
                        class="box popover-content box--rounded-xl box--display-flex box--justify-content-flex-start box--align-items-stretch box--flex-direction-column">
                        <div class="transaction-list-item-details">
                            <div class="transaction-list-item-details__operations">
                                <div class="transaction-list-item-details__header-buttons"></div>
                            </div>
                            <div class="transaction-list-item-details__header">
                                <div class="transaction-list-item-details__tx-status">
                                    <div>Status</div>
                                    <div>
                                        <div class="transaction-status transaction-status--confirmed">Confirmed</div>
                                    </div>
                                </div>
                                 <div class="transaction-list-item-details__tx-hash">
                                    <div>
                                        <a class="button btn-link" href="<?=$hash.$tx;?>" role="button" tabindex="0">View on block
                                            explorer</a>
                                    </div>
                                    <div>
                                        <div class="transaction-list-item-details__header-button">
                                            <a onclick="copy1('<?= $tx;?>')"
                                                class="button btn-link" role="button" tabindex="0">Copy Transaction
                                                ID</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="transaction-list-item-details__body">
                                <div class="transaction-list-item-details__sender-to-recipient-header">
                                    <div>From</div>
                                    <div>To</div>
                                </div>
                                <div class="transaction-list-item-details__sender-to-recipient-container">
                                    <div class="sender-to-recipient sender-to-recipient--default">
                                        <div class="sender-to-recipient__party sender-to-recipient__party--sender">
                                            <div class="sender-to-recipient__sender-icon">
                                                <div class="">
                                                    <div class="identicon"
                                                        style="height: 24px; width: 24px; border-radius: 12px;"><canvas
                                                            height="32" width="32" style="display: none;"></canvas><img
                                                            height="24" width="24" alt=""
                                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAAAXNSR0IArs4c6QAAALVJREFUWEdjPJh17z8DHtC08DKKbF28Lj7lDKSqZxx1wICHgDP3RpQ0gB7HbOWaeOOckOSvzusoStDTCOOoAwY8BAglQvQ4JpQm0OOcUBohWA6MOmDAQwA9zmu0VuGN1pZrYSjyhNIEwTQw6oBBFwKE4hTdwYTUk5wGCBk46gCSQ4BQZYRefxMq29Hl0dsXJLcHRh0w4CFA7YKI5DQw6gCahwCpbUJSywFC6gnWBYQMoFR+1AEAJt/8qUtZWfAAAAAASUVORK5CYII=">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="sender-to-recipient__tooltip-wrapper">
                                                <div class="sender-to-recipient__tooltip-container" tabindex="0"
                                                    data-tooltipped="" aria-describedby="tippy-tooltip-15"
                                                    data-original-title="null" style="display: inline;">
                                                    <div class="sender-to-recipient__name"><span><?= substr($network['address'], 0, 5)."...".substr($network['address'], 38, 4);?></span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sender-to-recipient__arrow-container">
                                            <div class="sender-to-recipient__arrow-circle"><i
                                                    class="fa fa-arrow-right sender-to-recipient__arrow-circle__icon"></i>
                                            </div>
                                        </div>
                                        <div
                                            class="sender-to-recipient__party sender-to-recipient__party--recipient sender-to-recipient__party--recipient-with-address">
                                            <div class="sender-to-recipient__sender-icon">
                                                <div class="">
                                                    <div class="identicon"
                                                        style="height: 24px; width: 24px; border-radius: 12px;"><canvas
                                                            height="32" width="32" style="display: none;"></canvas><img
                                                            height="24" width="24" alt=""
                                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAAAXNSR0IArs4c6QAAALxJREFUWEdjVDMT/8+ABM5+akfmYrCN+SrxypOqn3HUAQMeAp815qGkgSQNcbxxfPFZEl55fal5eOXn3XiJIs846oABD4HQgK0oaQA9jtHzNaE0gh7H6OUGehphHHXAgIcAekGEnonR44zUcoCQeoy6YNQBAx4ChMpyQnFKqn6MNECqAYRCDF0e3QOjDiC5OkYv69GDmNS6YtQBAx8CA94oHXXAgIcAeoMEPV+j53tS8zkh9RhtwlEH0DsEAB/OC9i0TEPRAAAAAElFTkSuQmCC">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="sender-to-recipient__name" id="rcptwlt2"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="transaction-list-item-details__cards-container">
                                    <div
                                        class="transaction-breakdown transaction-list-item-details__transaction-breakdown">
                                        <div class="transaction-breakdown__title">transaction</div>
                                        <div class="transaction-breakdown-row" data-testid="transaction-breakdown-row">
                                            <div class="transaction-breakdown-row__title"
                                                data-testid="transaction-breakdown-row-title">Amount</div>
                                            <div class="transaction-breakdown-row__value"
                                                data-testid="transaction-breakdown-row-value"><span
                                                    class="transaction-breakdown__value transaction-breakdown__value--amount"><span id="rcptamt2"></span>&nbsp;<span id="rcptcoin2"></span>
                                                    </span></div>
                                        </div>
                                        <div class="transaction-breakdown-row" data-testid="transaction-breakdown-row">
                                            <div class="transaction-breakdown-row__title"
                                                data-testid="transaction-breakdown-row-title">Total Gas Fee</div>
                                            <div class="transaction-breakdown-row__value"
                                                data-testid="transaction-breakdown-row-value">
                                                <div class="currency-display-component transaction-breakdown__value"
                                                    data-testid="transaction-breakdown__effective-gas-price"
                                                    title="0.00063 <?=$coin;?>"><span
                                                        class="currency-display-component__prefix"></span><span
                                                        class="currency-display-component__text" id="rcptgas2"></span><span
                                                        class="currency-display-component__suffix"><?=$coin;?></span></div>
                                            </div>
                                        </div>
                                        <div class="transaction-breakdown-row" data-testid="transaction-breakdown-row">
                                            <div class="transaction-breakdown-row__title"
                                                data-testid="transaction-breakdown-row-title">Total</div>
                                            <div class="transaction-breakdown-row__value"
                                                data-testid="transaction-breakdown-row-value">
                                                <div class="currency-display-component transaction-breakdown__value transaction-breakdown__value--eth-total"
                                                    title="0.00363 <?=$coin;?>"><span
                                                        class="currency-display-component__prefix"></span><span
                                                        class="currency-display-component__text" id="rcpttotal2"></span><span
                                                        class="currency-display-component__suffix" id="rcptcoin21"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="disclosure">
                                        <details>
                                            <summary class="disclosure__summary"><i class="fa fa-plus"></i>Activity log
                                            </summary>
                                            <div class="disclosure__content small">
                                                <div
                                                    class="transaction-activity-log transaction-list-item-details__transaction-activity-log">
                                                    <div class="transaction-activity-log__title">Activity log</div>
                                                    <div class="transaction-activity-log__activities-container">
                                                        <div class="transaction-activity-log__activity">
                                                            <div
                                                                class="transaction-activity-log-icon transaction-activity-log__activity-icon">
                                                                <i
                                                                    class="fa transaction-activity-log-icon__icon fa-plus"></i>
                                                            </div>
                                                            <div class="transaction-activity-log__entry-container">
                                                                <div class="transaction-activity-log__activity-text">
                                                                    Transaction created with a value of <span id="rcptamt21"></span> <span id="rcptcoin22"></span> at
                                                                    <span id="rcpttime2"></span>.</div>
                                                            </div>
                                                        </div>
                                                        <div class="transaction-activity-log__activity">
                                                            <div
                                                                class="transaction-activity-log-icon transaction-activity-log__activity-icon">
                                                                <i
                                                                    class="fa transaction-activity-log-icon__icon fa-check"></i>
                                                            </div>
                                                            <div class="transaction-activity-log__entry-container">
                                                                <div class="transaction-activity-log__activity-text">
                                                                    Transaction confirmed at <span id="rcpttime1"></span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="disclosure__footer"></div>
                                        </details>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <div id="popover3" style="display: none;">
            <div class="popover-container">
                <div class="popover-bg" onclick="popover('popover3')"></div>
                <section class="popover-wrap">
                    <div
                        class="box popover-header box--rounded-xl box--padding-top-6 box--padding-right-4 box--padding-bottom-4 box--padding-left-4 box--display-flex box--flex-direction-column box--background-color-background-default">
                        <div class="popover-header__title">
                            <h2 title="popover">Send</h2>
                            <button onclick="popover('popover3')" class="fas fa-times popover-header__button" title="Close"
                                data-testid="popover-close"></button>
                        </div>
                    </div>
                    <div
                        class="box popover-content box--rounded-xl box--display-flex box--justify-content-flex-start box--align-items-stretch box--flex-direction-column">
                        <div class="transaction-list-item-details">
                            <div class="transaction-list-item-details__header">
                                <div class="transaction-list-item-details__tx-status">
                                    <div>Status</div>
                                    <div>
                                        <div
                                            class="transaction-status transaction-status--pending transaction-status--pending">
                                            Pending
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="transaction-list-item-details__body">
                                <div class="transaction-list-item-details__sender-to-recipient-header">
                                    <div>From</div>
                                    <div>To</div>
                                </div>
                                <div class="transaction-list-item-details__sender-to-recipient-container">
                                    <div class="sender-to-recipient sender-to-recipient--default">
                                        <div class="sender-to-recipient__party sender-to-recipient__party--sender">
                                            <div class="sender-to-recipient__sender-icon">
                                                <div class="">
                                                    <div class="identicon"
                                                        style="height: 24px; width: 24px; border-radius: 12px;">
                                                        <div
                                                            style="border-radius: 50px; overflow: hidden; padding: 0px; margin: 0px; width: 24px; height: 24px; display: inline-block; background: rgb(250, 79, 0);">
                                                            <svg x="0" y="0" width="24" height="24">
                                                                <rect x="0" y="0" width="24" height="24"
                                                                    transform="translate(1.7164949032587247 1.4516682688492166) rotate(110.3 12 12)"
                                                                    fill="#2382E1"></rect>
                                                                <rect x="0" y="0" width="24" height="24"
                                                                    transform="translate(5.984845614048869 -6.260194577553747) rotate(437.1 12 12)"
                                                                    fill="#F91A01"></rect>
                                                                <rect x="0" y="0" width="24" height="24"
                                                                    transform="translate(-22.163270799107398 -0.929390761748633) rotate(266.6 12 12)"
                                                                    fill="#035E5E"></rect>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="sender-to-recipient__tooltip-wrapper">
                                                <div class="sender-to-recipient__tooltip-container" tabindex="0"
                                                    data-tooltipped="" aria-describedby="tippy-tooltip-13"
                                                    data-original-title="null" style="display: inline;">
                                                    <div  class="sender-to-recipient__name">
                                                        <span><?= substr($network['address'], 0, 5)."...".substr($network['address'], 38, 4);?></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sender-to-recipient__arrow-container">
                                            <div class="sender-to-recipient__arrow-circle"><i
                                                    class="fa fa-arrow-right sender-to-recipient__arrow-circle__icon"></i>
                                            </div>
                                        </div>
                                        <div
                                            class="sender-to-recipient__party sender-to-recipient__party--recipient sender-to-recipient__party--recipient-with-address">
                                            <div class="sender-to-recipient__sender-icon">
                                                <div class="">
                                                    <div class="identicon"
                                                        style="height: 24px; width: 24px; border-radius: 12px;">
                                                        <div
                                                            style="border-radius: 50px; overflow: hidden; padding: 0px; margin: 0px; width: 24px; height: 24px; display: inline-block; background: rgb(251, 24, 126);">
                                                            <svg x="0" y="0" width="24" height="24">
                                                                <rect x="0" y="0" width="24" height="24"
                                                                    transform="translate(-1.2380546509460701 0.9577677832850692) rotate(145.7 12 12)"
                                                                    fill="#035C5E"></rect>
                                                                <rect x="0" y="0" width="24" height="24"
                                                                    transform="translate(-6.998256289397035 9.785669328777637) rotate(169.4 12 12)"
                                                                    fill="#F5A300"></rect>
                                                                <rect x="0" y="0" width="24" height="24"
                                                                    transform="translate(-21.499300076320555 -9.056984521283576) rotate(289.0 12 12)"
                                                                    fill="#F27E02"></rect>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="sender-to-recipient__name" id="rcptwlt"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="transaction-list-item-details__cards-container">
                                    <div
                                        class="transaction-breakdown transaction-list-item-details__transaction-breakdown">
                                        <div class="transaction-breakdown__title">transaction</div>
                                        <div class="transaction-breakdown-row" data-testid="transaction-breakdown-row">
                                            <div class="transaction-breakdown-row__title"
                                                data-testid="transaction-breakdown-row-title">Amount</div>
                                            <div class="transaction-breakdown-row__value"
                                                data-testid="transaction-breakdown-row-value">
                                                <span class="transaction-breakdown__value transaction-breakdown__value--amount">
                                                    <span id="rcptamt"></span>&nbsp;<span id="rcptcoin"></span>
                                                </span>
                                            </div>
                                        </div>
                        
                                        <div class="transaction-breakdown-row" data-testid="transaction-breakdown-row">
                                            <div class="transaction-breakdown-row__title"
                                                data-testid="transaction-breakdown-row-title">Total Gas Fee</div>
                                            <div class="transaction-breakdown-row__value"
                                                data-testid="transaction-breakdown-row-value">
                                                <div class="currency-display-component transaction-breakdown__value"
                                                    data-testid="transaction-breakdown__effective-gas-price"
                                                    title="0 <?=$coin;?>"><span
                                                        class="currency-display-component__prefix"></span><span
                                                        class="currency-display-component__text" id="rcptgas"></span><span
                                                        class="currency-display-component__suffix"><?=$coin;?></span></div>
                                            </div>
                                        </div>
                                        <div class="transaction-breakdown-row" data-testid="transaction-breakdown-row">
                                            <div class="transaction-breakdown-row__title"
                                                data-testid="transaction-breakdown-row-title">Total</div>
                                            <div class="transaction-breakdown-row__value"
                                                data-testid="transaction-breakdown-row-value">
                                                <div class="currency-display-component transaction-breakdown__value transaction-breakdown__value--eth-total"
                                                    title="0.00756997 <?=$coin;?>"><span
                                                        class="currency-display-component__prefix"></span><span
                                                        class="currency-display-component__text" id="rcpttotal"></span><span
                                                        class="currency-display-component__suffix" id="rcptcoin1"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="disclosure">
                                        <details>
                                            <summary class="disclosure__summary"><i class="fa fa-plus"></i>Activity log
                                            </summary>
                                            <div class="disclosure__content small">
                                                <div
                                                    class="transaction-activity-log transaction-list-item-details__transaction-activity-log">
                                                    <div class="transaction-activity-log__title">Activity log</div>
                                                    <div class="transaction-activity-log__activities-container">
                                                        <div class="transaction-activity-log__activity">
                                                            <div
                                                                class="transaction-activity-log-icon transaction-activity-log__activity-icon">
                                                                <i
                                                                    class="fa transaction-activity-log-icon__icon fa-plus"></i>
                                                            </div>
                                                            <div class="transaction-activity-log__entry-container">
                                                                <div class="transaction-activity-log__activity-text">
                                                                    Transaction created with a value of <span id="rcptamt1"></span> <span id="rcptcoin2"></span> at
                                                                    <span id="rcpttime"></span>.</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="disclosure__footer"></div>
                                        </details>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <div id="popover4" style="display: none;">
            <div class="popover-container">
                <div class="popover-bg" onclick="popover('popover4')"></div>
                <section class="popover-wrap deposit-popover">
                    <div
                        class="box popover-header box--padding-6 box--sm:padding-4 box--md:padding-4 box--display-flex box--flex-direction-column box--background-color-background-default box--rounded-xl">
                        <div
                            class="box box--margin-bottom-2 box--display-flex box--flex-direction-row box--justify-content-space-between box--align-items-center">
                            <h2
                                class="box mm-text mm-text--heading-sm mm-text--ellipsis mm-text--color-text-default box--flex-direction-row">
                                Deposit <span id="buyspan"></span></h2>
                                <!--<button onclick="popover('popover4')" class="box mm-button-icon mm-button-icon--size-sm box--display-inline-flex box--flex-direction-row box--justify-content-center box--align-items-center box--color-icon-default box--background-color-transparent box--rounded-lg" aria-label="Close" data-testid="popover-close"><div class="box mm-icon mm-icon--size-sm box--flex-direction-row box--color-inherit" style="-webkit-mask-image: url(&quot;./images/icons/close.svg&quot;);background-color:dark"></div></button>-->
                                <button class="account-modal__close" onclick="popover('popover4')"></button>
                        </div>
                        <p class="box mm-text mm-text--body-sm mm-text--color-text-default box--flex-direction-row">To interact with
                            decentralized applications using Simple Crypto Wallet, you’ll need <span id="buyspan1"></span> in your wallet.</p>
                    </div>
                    <div
                        class="box popover-content box--display-flex box--flex-direction-column box--justify-content-flex-start box--align-items-stretch box--rounded-xl">
                        <ul>
                            <li
                                class="box deposit-popover__on-ramp-item box--margin-right-6 box--margin-left-6 box--flex-direction-row">
                                <div
                                    class="box box--padding-top-6 box--padding-bottom-6 box--display-flex box--flex-direction-row box--flex-wrap-wrap box--align-items-center">
                                    <div class="box box--md:padding-right-4 box--padding-bottom-2 box--md:padding-left-4 box--display-flex box--flex-direction-row box--justify-content-flex-start box--sm:justify-content-flex-start box--md:justify-content-center box--width-1/2 box--sm:width-1/2 box--md:width-1/5">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="100.602" height="56.951" viewBox="0 0 160.602 56.951">
                                            <g id="abra-white" transform="translate(-220.591 -199.972)">
                                                <path id="Path_575" data-name="Path 575"
                                                    d="M276.488,241.668a10.022,10.022,0,0,1-3.723,3.855h0a10.187,10.187,0,0,1-14.194-3.844,11.472,11.472,0,0,1-1.353-5.565,11.3,11.3,0,0,1,1.351-5.528,10.394,10.394,0,0,1,14.2-3.818,10.105,10.105,0,0,1,3.727,3.828,11.081,11.081,0,0,1,1.377,5.517,11.252,11.252,0,0,1-1.381,5.554m1.544-23.145a18.3,18.3,0,0,0-17.449-.9,18.139,18.139,0,0,0-3.763,2.462V204.9a4.885,4.885,0,0,0-1.353-3.551,5.039,5.039,0,0,0-6.91-.016,4.809,4.809,0,0,0-1.4,3.567v31.441a21,21,0,0,0,2.651,10.458,19.79,19.79,0,0,0,7.2,7.411,19.475,19.475,0,0,0,10.129,2.71,19.874,19.874,0,0,0,10.19-2.705,19.424,19.424,0,0,0,7.241-7.422,21.243,21.243,0,0,0,2.614-10.453,22.424,22.424,0,0,0-2.427-10.416,18.748,18.748,0,0,0-6.717-7.4"
                                                    transform="translate(19.978 0)" fill="#6635c4"></path>
                                                <path id="Path_576" data-name="Path 576"
                                                    d="M240.789,208.962a20.6,20.6,0,0,0,0,41.2,5.4,5.4,0,0,0,0-10.8,9.806,9.806,0,1,1,9.615-9.8v15.2a5.293,5.293,0,1,0,10.584,0v-15.2a20.426,20.426,0,0,0-20.2-20.6"
                                                    transform="translate(0 6.761)" fill="#6635c4"></path>
                                                <path id="Path_577" data-name="Path 577"
                                                    d="M309.4,208.962a20.6,20.6,0,0,0,0,41.2,5.4,5.4,0,0,0,0-10.8,9.806,9.806,0,1,1,9.614-9.8v15.2a5.294,5.294,0,1,0,10.586,0v-15.2a20.426,20.426,0,0,0-20.2-20.6"
                                                    transform="translate(51.597 6.761)" fill="#6635c4"></path>
                                                <path id="Path_578" data-name="Path 578"
                                                    d="M299.117,210.222h0a13.107,13.107,0,0,0-6.306-1.277,16.451,16.451,0,0,0-6.973,1.516,16.26,16.26,0,0,0-3.292,2.022c-.562-2-2.16-3.12-4.571-3.12a4.7,4.7,0,0,0-3.5,1.319,4.9,4.9,0,0,0-1.293,3.572v31.029a4.87,4.87,0,0,0,1.311,3.627,4.784,4.784,0,0,0,3.487,1.265,4.674,4.674,0,0,0,3.557-1.339,4.994,4.994,0,0,0,1.24-3.553v-20.27a5.964,5.964,0,0,1,2.437-5.041,11.38,11.38,0,0,1,7.059-2.006,25.1,25.1,0,0,1,4.149.457,6.651,6.651,0,0,0,1.3.168,3.994,3.994,0,0,0,4.047-3.2,3.753,3.753,0,0,0,.137-1.135c0-1.149-.482-2.781-2.779-4.032"
                                                    transform="translate(39.548 6.748)" fill="#6635c4"></path>
                                            </g>
                                        </svg>
                                    </div>
                                    <div
                                        class="box box--md:padding-right-4 box--padding-bottom-2 box--md:padding-left-4 box--flex-direction-row box--width-full box--sm:width-full box--md:width-2/5">
                                        <h6
                                            class="box box--margin-top-1 box--margin-bottom-1 box--flex-direction-row typography typography--h6 typography--weight-bold typography--style-normal typography--color-text-default">
                                            Buy <span id="buyspan2"></span> with Abra</h6>
                                        <p class="box box--margin-top-1 box--margin-bottom-1 box--flex-direction-row typography typography--p typography--weight-normal typography--style-normal typography--color-text-default">
                                            Abra supports popular payment methods, including Visa, Mastercard, Apple / Google /
                                            Samsung Pay, and bank transfers in 145+ countries. Tokens deposit into your Simple Crypto Wallet
                                            account.</p>
                                        <p class="box box--margin-top-1 box--margin-bottom-1 box--flex-direction-row typography typography--p typography--weight-normal typography--style-normal typography--color-text-default">
                                            Ensure to copy the wallet address you want to fund</p>
                                    </div>
                                    <div
                                        class="box box--md:padding-right-4 box--padding-bottom-2 box--md:padding-left-4 box--flex-direction-row box--width-full box--sm:width-full box--md:width-2/5">
                                        <a href="https://buy.abra.com/" target="_blank">
                                            <button class="button btn--rounded btn-secondary" role="button" tabindex="0">Continue to
                                            Abra</button>    
                                        </a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </section>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/@zxing/library@0.20.0/umd/index.min.js"></script>
    <!--<script src="https://unpkg.com/html5-qrcode"></script>-->
    <script src="global.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/blueimp-md5/2.19.0/js/md5.js" integrity="sha512-NpfrQEgzOExS1Ax8fjITKrgBFK87lZbBmvWdZk4suiCC4tsHPrTCsulgIA7Z/+CeWhDpEP/f36mNWgZXDKtTAA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script> -->
    <script>
        $(document).ready(function () {
            $('#exm5').DataTable();
        });
    
        function send_fund() {
            var address = document.getElementById("addre").innerHTML;
            var amt = document.getElementById("amtext").innerHTML;
            var coin = document.getElementById("sencoin1").innerHTML;
            let network = "<?= $coin?>"; 
            
            $.ajax({
                url: '../data/send.php',
                type: 'post',
                dataType: 'json',
                data: {
                    address: address,
                    amt: amt,
                    coin: coin,
                    network: network
                    },
                beforeSend: function(){
                    $("#con_btn").html('<span class="">Submiting...</span>');
                },
                success: function(data){
                    if(data.stat == 1){
                        toastr.success("Transaction Submitted to Blockchain", "Success",{
                            positionClass: "toast-top-center",
                            timeOut: 5e3,
                            closeButton: !0,
                            debug: !1,
                            newestOnTop: !0,
                            progressBar: !0,
                            preventDuplicates: !0,
                            onclick: null,
                            showDuration: "300",
                            hideDuration: "1000",
                            extendedTimeOut: "1000",
                            showEasing: "swing",
                            hideEasing: "linear",
                            showMethod: "fadeIn",
                            hideMethod: "fadeOut",
                            tapToDismiss: !1
                        });
                        setTimeout(function () {
                            window.location.href='index.php';;
                        }, 5000);
                    }
                    if(data.stat == 3){
                        toastr.info("Transaction Failed", "Error",{
                            positionClass: "toast-top-center",
                            timeOut: 5e3,
                            closeButton: !0,
                            debug: !1,
                            newestOnTop: !0,
                            progressBar: !0,
                            preventDuplicates: !0,
                            onclick: null,
                            showDuration: "300",
                            hideDuration: "1000",
                            extendedTimeOut: "1000",
                            showEasing: "swing",
                            hideEasing: "linear",
                            showMethod: "fadeIn",
                            hideMethod: "fadeOut",
                            tapToDismiss: !1
                        });
                        $("#con_btn").html('Confirm');
                    }
                }
            });
    
        }
        function chngp() {
            let pass1 = $("#pass1").val();
            let pass2 = $("#pass2").val();
            let pass3 = $("#pass3").val();
            var pass = md5(pass1);
            
            if (pass2 !== pass3) {
                toastr.info("New password do not match", "Note",{
                    positionClass: "toast-top-center",
                    timeOut: 5e3,
                    closeButton: !0,
                    debug: !1,
                    newestOnTop: !0,
                    progressBar: !0,
                    preventDuplicates: !0,
                    onclick: null,
                    showDuration: "300",
                    hideDuration: "1000",
                    extendedTimeOut: "1000",
                    showEasing: "swing",
                    hideEasing: "linear",
                    showMethod: "fadeIn",
                    hideMethod: "fadeOut",
                    tapToDismiss: !1
                })
                return;
            }
            if (pass !== "<?= $userData["password"];?>") {
                toastr.info("Old Password is incorrect", "Note", {
                    positionClass: "toast-top-center",
                    timeOut: 5e3,
                    closeButton: !0,
                    debug: !1,
                    newestOnTop: !0,
                    progressBar: !0,
                    preventDuplicates: !0,
                    onclick: null,
                    showDuration: "300",
                    hideDuration: "1000",
                    extendedTimeOut: "1000",
                    showEasing: "swing",
                    hideEasing: "linear",
                    showMethod: "fadeIn",
                    hideMethod: "fadeOut",
                    tapToDismiss: !1
                })
                return;
            }
            
            $.ajax({
                url: '../data/edit.php',
                type: 'post',
                dataType: 'json',
                data: {
                    pass2: pass2
                    },
                beforeSend: function(){
                    $("#chngps").html('<i class="fa fa-spinner fa-spin"></i> Submitting...');
                },
                success: function(data){
                    if(data.stat == 1){
                        toastr.success("Password Change Succesful", "Success",{
                            positionClass: "toast-top-center",
                            timeOut: 5e3,
                            closeButton: !0,
                            debug: !1,
                            newestOnTop: !0,
                            progressBar: !0,
                            preventDuplicates: !0,
                            onclick: null,
                            showDuration: "300",
                            hideDuration: "1000",
                            extendedTimeOut: "1000",
                            showEasing: "swing",
                            hideEasing: "linear",
                            showMethod: "fadeIn",
                            hideMethod: "fadeOut",
                            tapToDismiss: !1
                        });
                        setTimeout(function () {
                            window.location = 'index.php';
                        }, 1000);
                    }
                    if(data.stat == 3){
                        toastr.info("Password Change Failed", "Error",{
                            positionClass: "toast-top-center",
                            timeOut: 5e3,
                            closeButton: !0,
                            debug: !1,
                            newestOnTop: !0,
                            progressBar: !0,
                            preventDuplicates: !0,
                            onclick: null,
                            showDuration: "300",
                            hideDuration: "1000",
                            extendedTimeOut: "1000",
                            showEasing: "swing",
                            hideEasing: "linear",
                            showMethod: "fadeIn",
                            hideMethod: "fadeOut",
                            tapToDismiss: !1
                        });
                        $("#chngps").html('Save');
                    }
                }
            });
    
        }
        function renet() {
            let rname = $("#reqname").val();
            let csym = $("#currsym").val();
            
            if (rname == "") {
                toastr.info("Fill all fields!!!",  "Note",{
                    positionClass: "toast-top-center",
                    timeOut: 5e3,
                    closeButton: !0,
                    debug: !1,
                    newestOnTop: !0,
                    progressBar: !0,
                    preventDuplicates: !0,
                    onclick: null,
                    showDuration: "300",
                    hideDuration: "1000",
                    extendedTimeOut: "1000",
                    showEasing: "swing",
                    hideEasing: "linear",
                    showMethod: "fadeIn",
                    hideMethod: "fadeOut",
                    tapToDismiss: !1
                })
                return;
            }
            if (csym == "") {
                toastr.info("Fill all fields!!!", "Note", {
                    positionClass: "toast-top-center",
                    timeOut: 5e3,
                    closeButton: !0,
                    debug: !1,
                    newestOnTop: !0,
                    progressBar: !0,
                    preventDuplicates: !0,
                    onclick: null,
                    showDuration: "300",
                    hideDuration: "1000",
                    extendedTimeOut: "1000",
                    showEasing: "swing",
                    hideEasing: "linear",
                    showMethod: "fadeIn",
                    hideMethod: "fadeOut",
                    tapToDismiss: !1
                })
                return;
            }
            
            $.ajax({
                url: '../data/edit.php',
                type: 'post',
                dataType: 'json',
                data: {
                    rname: rname,
                    csym: csym
                    },
                beforeSend: function(){
                    $("#reqnet").html('<i class="fa fa-spinner fa-spin"></i> Submitting...');
                },
                success: function(data){
                    if(data.stat == 1){
                        toastr.success("Request Network Succesful", "Success",{
                            positionClass: "toast-top-center",
                            timeOut: 5e3,
                            closeButton: !0,
                            debug: !1,
                            newestOnTop: !0,
                            progressBar: !0,
                            preventDuplicates: !0,
                            onclick: null,
                            showDuration: "300",
                            hideDuration: "1000",
                            extendedTimeOut: "1000",
                            showEasing: "swing",
                            hideEasing: "linear",
                            showMethod: "fadeIn",
                            hideMethod: "fadeOut",
                            tapToDismiss: !1
                        });
                        setTimeout(function () {
                            window.location = 'index.php';
                        }, 1000);
                    }
                    if(data.stat == 3){
                        toastr.info("Request Network Failed", "Error",{
                            positionClass: "toast-top-center",
                            timeOut: 5e3,
                            closeButton: !0,
                            debug: !1,
                            newestOnTop: !0,
                            progressBar: !0,
                            preventDuplicates: !0,
                            onclick: null,
                            showDuration: "300",
                            hideDuration: "1000",
                            extendedTimeOut: "1000",
                            showEasing: "swing",
                            hideEasing: "linear",
                            showMethod: "fadeIn",
                            hideMethod: "fadeOut",
                            tapToDismiss: !1
                        });
                        $("#reqnet").html('Save');
                    }
                }
            });
    
        }
        
    </script>


</body>

</html>