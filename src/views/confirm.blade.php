<!DOCTYPE HTML>
<HTML>
    <HEAD>
        <TITLE>{{ config('app.name') }}</TITLE>
        <STYLE TYPE="text/css">
        <!--
        body { text-align: center; }
        -->
        </STYLE>
    </HEAD>
    <BODY>
        <H1>⚠{{ trans('CookieConfirm::cookie_confirm.warning') }}</H1>
        <H2>{{ trans('CookieConfirm::cookie_confirm.uses_cookie') }}</H2>
        <P>{{ trans('CookieConfirm::cookie_confirm.cookie_description') }}</P>
        <H2>{{ trans('CookieConfirm::cookie_confirm.uses_js') }}</H2>
        <P>{{ trans('CookieConfirm::cookie_confirm.js_description') }}</P>
        <P>{{ trans('CookieConfirm::cookie_confirm.if_you_agree') }}</P>
        <A HREF={{ $origin_link }}>{{ trans('CookieConfirm::cookie_confirm.go_the_site') }}</A>
        <P>{{ trans('CookieConfirm::cookie_confirm.if_you_dont_agree') }}</P>
        <UL>
            <LI><A HREF="https://google.com">Google</A></LI>
            <LI><A HREF="https://yahoo.co.jp">Yahoo Japan!</A></LI>
            <LI><A HREF="https://msn.com">MSN</A></LI>
            <LI><A HREF="https://infoseek.co.jp">Infoseek</A></LI>
        </UL>
    </BODY>
</HTML>
