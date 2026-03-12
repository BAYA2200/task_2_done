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

    <tbody>
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
                        <div class="input__label-text">        <?=$arResult["QUESTIONS"]["SIMPLE_QUESTION_450"]["CAPTION"]?>
                        </div>
                                <?=$arResult["QUESTIONS"]["SIMPLE_QUESTION_450"]["HTML_CODE"]?>

                        <div class="input__notification">Поле должно содержать не менее 3-х символов</div>
                    </label></div>
                <div class="input contact-form__input"><label class="input__label" for="medicine_company">
                        <div class="input__label-text">        <?=$arResult["QUESTIONS"]["SIMPLE_QUESTION_602"]["CAPTION"]?>
                        </div>
                                <?=$arResult["QUESTIONS"]["SIMPLE_QUESTION_602"]["HTML_CODE"]?>

                        <div class="input__notification">Поле должно содержать не менее 3-х символов</div>
                    </label></div>
                <div class="input contact-form__input"><label class="input__label" for="medicine_email">
                        <div class="input__label-text">        <?=$arResult["QUESTIONS"]["SIMPLE_QUESTION_240"]["CAPTION"]?>
                        </div>
                        <?=$arResult["QUESTIONS"]["SIMPLE_QUESTION_240"]["HTML_CODE"]?>
                        </div>
                        <div class="input__notification">Неверный формат почты</div>
                    </label></div>
                <div class="input contact-form__input"><label class="input__label" for="medicine_phone">
                        <div class="input__label-text">        <?=$arResult["QUESTIONS"]["SIMPLE_QUESTION_857"]["CAPTION"]?>
                        </div>
                        <?=$arResult["QUESTIONS"]["SIMPLE_QUESTION_857"]["HTML_CODE"]?>
                    </label></div>
            <div class="contact-form__form-message">
                <div class="input"><label class="input__label" for="medicine_message">
                        <div class="input__label-text">        <?=$arResult["QUESTIONS"]["SIMPLE_QUESTION_204"]["CAPTION"]?>
                        </div>
                        <?=$arResult["QUESTIONS"]["SIMPLE_QUESTION_204"]["HTML_CODE"]?>

                        <div class="input__notification"></div>
                    </label></div>
            </div>
    </div>


            <?
            if($arResult["isUseCaptcha"] == "Y")
            {
                ?>
                <tr>
                    <th colspan="2"><b><?=GetMessage("FORM_CAPTCHA_TABLE_TITLE")?></b></th>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td><input type="hidden" name="captcha_sid" value="<?=htmlspecialcharsbx($arResult["CAPTCHACode"]);?>" /><img src="/bitrix/tools/captcha.php?captcha_sid=<?=htmlspecialcharsbx($arResult["CAPTCHACode"]);?>" width="180" height="40" /></td>
                </tr>
                <tr>
                    <td><?=GetMessage("FORM_CAPTCHA_FIELD_TITLE")?><?=$arResult["REQUIRED_SIGN"];?></td>
                    <td><input type="text" name="captcha_word" size="30" maxlength="50" value="" class="inputtext" /></td>
                </tr>
                <?
            } // isUseCaptcha
            ?>
    </tbody>
    <tfoot>
    <tr>
        <th colspan="2">
            <input <?=(intval($arResult["F_RIGHT"]) < 10 ? "disabled=\"disabled\"" : "");?> type="submit" name="web_form_submit" value="<?=htmlspecialcharsbx(trim($arResult["arForm"]["BUTTON"]) == '' ? GetMessage("FORM_ADD") : $arResult["arForm"]["BUTTON"]);?>" />
            <?if ($arResult["F_RIGHT"] >= 15):?>
                &nbsp;<input type="hidden" name="web_form_apply" value="Y" /><input type="submit" name="web_form_apply" value="<?=GetMessage("FORM_APPLY")?>" />
            <?endif;?>
            &nbsp;<input type="reset" value="<?=GetMessage("FORM_RESET");?>" />
        </th>
    </tr>
    </tfoot>
    </table>
    <p>
        <?=$arResult["REQUIRED_SIGN"];?> - <?=GetMessage("FORM_REQUIRED_FIELDS")?>
    </p>
    <?=$arResult["FORM_FOOTER"]?>
    <?
} //endif (isFormNote)
?>