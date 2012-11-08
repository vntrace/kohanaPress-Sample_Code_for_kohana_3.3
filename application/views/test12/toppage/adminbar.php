<script type='text/javascript' src='loadjs?load=admin-bar'></script>
<div id="wpadminbar" class="nojq nojs" role="navigation">
    <div class="quicklinks">
        <ul id="wp-admin-bar-root-default" class="ab-top-menu">
            <li id="wp-admin-bar-wp-logo" class="menupop">
                <a class="ab-item" tabindex="10" aria-haspopup="true" href="http://kohanaframework.org/" title="kohana について">
                    <img src="/includes/img/kohana/favicon.ico" align="absmiddle" /></a>
                <div class="ab-sub-wrapper">
                    <ul id="wp-admin-bar-wp-logo-default" class="ab-submenu">
                        <li id="wp-admin-bar-about" class=""><a class="ab-item" tabindex="10" href="http://kohanaframework.org/">kohana について</a>		</li>
                    </ul>
                    <ul id="wp-admin-bar-wp-logo-external" class="ab-sub-secondary ab-submenu">
                        <li id="wp-admin-bar-wporg" class=""><a class="ab-item" tabindex="10" href="http://kohanaframework.org/">kohanaframework.org</a>		</li>
                        <li id="wp-admin-bar-documentation" class=""><a class="ab-item" tabindex="10" href="http://kohanaframework.org/documentation">ドキュメンテーション</a>		</li>
                        <li id="wp-admin-bar-support-forums" class=""><a class="ab-item" tabindex="10" href="http://forum.kohanaframework.org/">サポートフォーラム</a>		</li>
                    </ul>
                </div>		
            </li>
            <li id="wp-admin-bar-site-name" class="menupop"><a class="ab-item" tabindex="10" aria-haspopup="true" href="test12">kohanaPress</a>
                <div class="ab-sub-wrapper">
                    <ul id="wp-admin-bar-site-name-default" class="ab-submenu">
                        <li id="wp-admin-bar-dashboard" class=""><a class="ab-item" tabindex="10" href="test12_edit">ダッシュボード</a>		</li>
                    </ul>
                    <ul id="wp-admin-bar-appearance" class=" ab-submenu">

                        <li id="wp-admin-bar-themes" class=""><a class="ab-item" tabindex="10" href="">テーマ</a>		</li>
                        <li id="wp-admin-bar-widgets" class=""><a class="ab-item" tabindex="10" href="">ウィジェット</a>		</li>
                        <li id="wp-admin-bar-menus" class=""><a class="ab-item" tabindex="10" href="">メニュー</a>		</li>
                        <li id="wp-admin-bar-background" class=""><a class="ab-item" tabindex="10" href="">背景</a>		</li>
                        <li id="wp-admin-bar-header" class=""><a class="ab-item" tabindex="10" href="">ヘッダー</a>		</li>
                    </ul>
                </div>		
            </li>

            <li id="wp-admin-bar-comments" class=""><a class="ab-item" tabindex="10" href="" title="0件のコメントが承認待ちです。">
                    <span class="ab-icon"></span>
                    <span id="ab-awaiting-mod" class="ab-label awaiting-mod pending-count count-0">0</span></a>		</li>
            <li id="wp-admin-bar-new-content" class="menupop"><a class="ab-item" tabindex="10" aria-haspopup="true" href="test12_postnew" title="新規追加">
                    <span class="ab-icon"></span><span class="ab-label">新規</span></a>
                <div class="ab-sub-wrapper">
                    <ul id="wp-admin-bar-new-content-default" class="ab-submenu">
                        <li id="wp-admin-bar-new-post" class=""><a class="ab-item" tabindex="10" href="test12_postnew">投稿</a>		</li>
                        <li id="wp-admin-bar-new-media" class=""><a class="ab-item" tabindex="10" href="test12_upload?p=upload">メディア</a>		</li>
                        <li id="wp-admin-bar-new-link" class=""><a class="ab-item" tabindex="10" href="">リンク</a>		</li>
                        <li id="wp-admin-bar-new-page" class=""><a class="ab-item" tabindex="10" href="">固定ページ</a>		</li>
                        <li id="wp-admin-bar-new-user" class=""><a class="ab-item" tabindex="10" href="">ユーザー</a>		</li>
                    </ul>
                </div>		
            </li>
        </ul>
        <ul id="wp-admin-bar-top-secondary" class="ab-top-secondary ab-top-menu">
            <li id="wp-admin-bar-search" class=" admin-bar-search">
                <div class="ab-item ab-empty-item" tabindex="-1">
                    <form action="" method="get" id="adminbarsearch">
                        <input class="adminbar-input" name="s" id="adminbar-search" tabindex="10" type="text" value="" maxlength="150" />
                        <input type="submit" class="adminbar-button" value="検索"/>
                    </form>
                </div>		
            </li>
            <li id="wp-admin-bar-my-account" class="menupop with-avatar">
                <a class="ab-item" tabindex="10" aria-haspopup="true" href="" title="アカウント">こんにちは、<?php if ($loginuser) echo $loginuser; ?> さん !
                    <img alt='' src='http://0.gravatar.com/avatar/44a5ec8027aa6066ded2b534112a45da?s=16&amp;d=http%3A%2F%2F0.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D16&amp;r=G' class='avatar avatar-16 photo' height='16' width='16' /></a>
                <div class="ab-sub-wrapper">
                    <ul id="wp-admin-bar-user-actions" class=" ab-submenu">
                        <li id="wp-admin-bar-user-info" class=""><a class="ab-item" tabindex="-1" href="">
                                <img alt='' src='http://0.gravatar.com/avatar/44a5ec8027aa6066ded2b534112a45da?s=64&amp;d=http%3A%2F%2F0.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D64&amp;r=G' class='avatar avatar-64 photo' height='64' width='64' />
                                <span class='display-name'><?php if ($loginuser) echo $loginuser; ?></span></a>		
                        </li>
                        <li id="wp-admin-bar-edit-profile" class=""><a class="ab-item" tabindex="10" href="">プロフィールを編集</a>		</li>
                        <li id="wp-admin-bar-logout" class=""><a class="ab-item" tabindex="10" href="test12_logout">ログアウト</a>		</li>
                    </ul>
                </div>		
            </li>
        </ul>			
    </div>
</div>
