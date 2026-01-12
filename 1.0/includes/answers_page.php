<div class="tab-pane fade" id="v-pills-answers" role="tabpanel" aria-labelledby="v-pills-answers-tab">						
    <br>
    <div id="accordion">
        <div class="card">
            <div class="card-header">
                <a class="card-link" data-toggle="collapse" href="#answerOne">
                    <?=	$langData['faq']['title_question_1'] ?>
                </a>
            </div>
            <div id="answerOne" class="collapse show" data-parent="#accordion">
                <div class="card-body">
                    <?= $langData['faq']['answer_1'] ?>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="alert alert-success" role="alert">
        <div id="disqus_thread"></div>
        <script>
            (function () {
                var d = document, s = d.createElement('script');
                s.src = 'https://ifor-kz.disqus.com/embed.js';
                s.setAttribute('data-timestamp', +new Date());
                (d.head || d.body).appendChild(s);
            })();
        </script>
        <noscript>
            <?= $langData['faq']['disqus_noscript'] ?>
            <a href="https://disqus.com/?ref_noscript">
                <?= $langData['faq']['disqus_link_text'] ?>
            </a>
        </noscript>
    </div>
</div>
