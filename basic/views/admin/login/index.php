<?php
use yii\helpers\Url;
?>
<div class="m-grid m-grid--hor m-grid--root m-page">
    <div class="m-grid__item m-grid__item--fluid m-grid m-grid--hor m-login m-login--signin m-login--2 m-login-2--skin-2" id="m_login" style="background-image: url(<{$SKIN_PATH}>assets/app/media/img/bg/bg-3.jpg);">
        <div class="m-grid__item m-grid__item--fluid	m-login__wrapper">
            <div class="m-login__container">
                <div class="m-login__logo">
                    <a href="#">

                    </a>
                </div>
                <div class="m-login__signin">
                    <div class="m-login__head">

                    </div>
                    <form class="m-login__form m-form" action="<?=Url::toRoute(['admin/login/login'])?>" method="post">
                        <div class="form-group m-form__group">
                            <input class="form-control m-input"   type="text" required name="name" autocomplete="off">
                        </div>
                        <div class="form-group m-form__group">
                            <input class="form-control m-input m-login__form-input--last" required type="password"  name="pass">
                        </div>

                        <div class="row m-login__form-sub " >
                            <div class="col m--align-left m-login__form-left" style="display: none">
                                <label class="m-checkbox  m-checkbox--focus">
                                    <input type="checkbox" name="remember" value="1">
                                    Remember me
                                    <span></span>
                                </label>
                            </div>

                        </div>
                        <div class="m-login__form-action">
                            <button id="m_login_signin_submit" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air m-login__btn m-login__btn--primary">
                                Sign In
                            </button>
                        </div>
                    </form>
                </div>


            </div>
        </div>
    </div>
</div>

