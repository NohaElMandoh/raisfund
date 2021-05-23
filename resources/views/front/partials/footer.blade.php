<footer class="footer-area v2">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3 text-center text-white">
                <h3 class="heading-3 text-white">{{ Voyager::setting('site.footer_description_en') }}</h3>
                <p>{{ Voyager::setting('site.footer_sub_title_en') }}</p>
                <form id="mc-form" class="subscrie-form v2">
                    <label class="mt10" for="mc-email"></label>
                    <input type="email" class="control" id="mc-email">
                    <button type="submit" class="submit">{{__('home.Get Started for free')}}</button>
                </form>
                <div class="space-60"></div>
                <div class="copyright">&copy; {{ now()->year }}{{ Voyager::setting('site.footer_copyright_en') }}</div>
            </div>
        </div>	
    </div>
</footer>

