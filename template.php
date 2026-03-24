<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
?>
<?if ($arResult["isFormErrors"] == "Y"):?><?=$arResult["FORM_ERRORS_TEXT"];?><?endif;?>

<?=$arResult["FORM_NOTE"]?>

<?if ($arResult["isFormNote"] != "Y")
{
    ?>
    <?=$arResult["FORM_HEADER"]?>

    <table>
        <?
        if ($arResult["isFormDescription"] == "Y" || $arResult["isFormTitle"] == "Y" || $arResult["isFormImage"] == "Y")
        {
            ?>
            <tr>
                <td><?
                    /***********************************************************************************
                    form header
                     ***********************************************************************************/
                    if ($arResult["isFormTitle"])
                    {
                        ?>
                        <h3><?=$arResult["FORM_TITLE"]?></h3>
                        <?
                    } //endif ;

                    if ($arResult["isFormImage"] == "Y")
                    {
                        ?>
                        <a href="<?=$arResult["FORM_IMAGE"]["URL"]?>" target="_blank" alt="<?=GetMessage("FORM_ENLARGE")?>"><img src="<?=$arResult["FORM_IMAGE"]["URL"]?>" <?if($arResult["FORM_IMAGE"]["WIDTH"] > 300):?>width="300"<?elseif($arResult["FORM_IMAGE"]["HEIGHT"] > 200):?>height="200"<?else:?><?=$arResult["FORM_IMAGE"]["ATTR"]?><?endif;?> hspace="3" vscape="3" border="0" /></a>
                        <?//=$arResult["FORM_IMAGE"]["HTML_CODE"]?>
                        <?
                    } //endif
                    ?>
                    <p><?=$arResult["FORM_DESCRIPTION"]?></p>
                </td>
            </tr>
            <?
        } // endif
        ?>
    </table>
    <br />
    <?
    /***********************************************************************************
    form questions
     ***********************************************************************************/
    ?>
    <div class="contact-form">
        <div class="contact-form__head">
            <div class="contact-form__head-title">Связаться</div>
            <div class="contact-form__head-text">Наши сотрудники помогут выполнить подбор услуги и&nbsp;расчет цены с&nbsp;учетом
                ваших требований
            </div>
        </div>
        <form class="contact-form__form" action="/" method="POST">
            <div class="contact-form__form-inputs">
                <div class="input contact-form__input"><label class="input__label" for="medicine_name">
                        <div class="input__label-text"><?=$arResult["QUESTIONS"]["SIMPLE_QUESTION_450"]["CAPTION"]?></div>
                        <input class="input__input" type="text" id="medicine_name" name="form_text_3" value=""
                               required="" >
                        <div class="input__notification">Поле должно содержать не менее 3-х символов</div>
                    </label></div>
                <div class="input contact-form__input"><label class="input__label" for="SIMPLE_QUESTION_240">
                        <div class="input__label-text"><?=$arResult["QUESTIONS"]["SIMPLE_QUESTION_240"]["CAPTION"]?></div>
                        <input class="input__input" type="text" id="SIMPLE_QUESTION_240" name="form_text_4" value=""
                               required="">
                        <div class="input__notification">Поле должно содержать не менее 3-х символов</div>
                    </label></div>
                <div class="input contact-form__input"><label class="input__label" for="SIMPLE_QUESTION_602">
                        <div class="input__label-text"><?=$arResult["QUESTIONS"]["SIMPLE_QUESTION_602"]["CAPTION"]?></div>
                        <input class="input__input" type="email" id="SIMPLE_QUESTION_602" name="form_text_5" value=""
                               required="">
                        <div class="input__notification">Неверный формат почты</div>
                    </label></div>
                <div class="input contact-form__input"><label class="input__label" for="SIMPLE_QUESTION_857">
                        <div class="input__label-text"> <?=$arResult["QUESTIONS"]["SIMPLE_QUESTION_857"]["CAPTION"]?></div>
                        <input class="input__input" type="tel" id="SIMPLE_QUESTION_857"
                               data-inputmask="'mask': '+79999999999', 'clearIncomplete': 'true'" maxlength="12"
                               x-autocompletetype="phone-full" name="form_text_6" value="" required=""></label></div>
            </div>
            <div class="contact-form__form-message">
                <div class="input"><label class="input__label" for="SIMPLE_QUESTION_204">
                        <div class="input__label-text"><?=$arResult["QUESTIONS"]["SIMPLE_QUESTION_204"]["CAPTION"]?></div>
                        <textarea class="input__input" type="text" id="SIMPLE_QUESTION_204" name="form_text_7"
                                  value=""></textarea>
                        <div class="input__notification"></div>
                    </label></div>
            </div>
            <div class="contact-form__bottom">
                <div class="contact-form__bottom-policy">Нажимая &laquo;Отправить&raquo;, Вы&nbsp;подтверждаете, что
                    ознакомлены, полностью согласны и&nbsp;принимаете условия &laquo;Согласия на&nbsp;обработку персональных
                    данных&raquo;.
                </div>
                <button class="form-button contact-form__bottom-button" data-success="Отправлено"
                        data-error="Ошибка отправки" name="web_form_submit" type="submit" class="form__bottom contact-form__bottom" value="<?=htmlspecialcharsbx(trim($arResult["arForm"]["BUTTON"]) == '' ? GetMessage("FORM_ADD") : $arResult["arForm"]["BUTTON"]);?>"">
                    <div class="form-button__title" >Оставить заявку</div>
                </button>
<!--                <input --><?php //=(intval($arResult["F_RIGHT"]) < 10 ? "disabled=\"disabled\"" : "");?><!-- class="form-button contact-form__bottom-button form-button__title" data-success="Отправлено"-->
<!--                                                                                                data-error="Ошибка отправки" name="web_form_submit" type="submit" class="form__bottom contact-form__bottom" value="Оставить заявку"/>-->
            </div>
        </form>
    </div>
    <p>
        <?=$arResult["REQUIRED_SIGN"];?> - <?=GetMessage("FORM_REQUIRED_FIELDS")?>
    </p>
    <?=$arResult["FORM_FOOTER"]?>
    <?
} //endif (isFormNote)
?>

