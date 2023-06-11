<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('login', function () {
    return response()->json([
       'login' => true
    ]);
})->name('login');

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/best', [])->name('best');
    Route::get('/by_id/names', [])->name('by_id_names');
    Route::get('/comments/article', [])->name('comments_article');
    Route::get('/controversial', [])->name('controversial');
    Route::get('/duplicates/article', [])->name('duplicates_article');
    Route::get('/hot', [])->name('hot');
    Route::get('/new', [])->name('new');
    Route::get('/random', [])->name('random');
    Route::get('/rising', [])->name('rising');
    Route::get('/search', [])->name('search');
    Route::get('/sidebar', [])->name('sidebar');
    Route::get('/sort', [])->name('sort');
    Route::get('/sticky', [])->name('sticky');
    Route::get('/stylesheet', [])->name('stylesheet');
    Route::get('/top', [])->name('top');

    Route::prefix('api')->group(function () {
        Route::get('/banned', [])->name('banned');
        Route::get('/accept_moderator_invite', [])->name('accept_moderator_invite');
        Route::get('/approve', [])->name('approve');
        Route::get('/block', [])->name('block');
        Route::get('/block_user', [])->name('block_user');
        Route::get('/clearflairtemplates', [])->name('clearflairtemplates');
        Route::get('/collapse_message', [])->name('collapse_message');
        Route::get('/comment', [])->name('comment');
        Route::get('/compose', [])->name('compose');
        Route::get('/del', [])->name('del');
        Route::get('/del_msg', [])->name('del_msg');
        Route::get('/delete_sr_banner', [])->name('delete_sr_banner');
        Route::get('/delete_sr_header', [])->name('delete_sr_header');
        Route::get('/delete_sr_icon', [])->name('delete_sr_icon');
        Route::get('/delete_sr_img', [])->name('delete_sr_img');
        Route::get('/deleteflair', [])->name('deleteflair');
        Route::get('/deleteflairtemplate', [])->name('deleteflairtemplate');
        Route::get('/distinguish', [])->name('distinguish');
        Route::get('/editusertext', [])->name('editusertext');
        Route::get('/event_post_time', [])->name('event_post_time');
        Route::get('/flair', [])->name('flair');
        Route::get('/flair_template_order', [])->name('flair_template_order');
        Route::get('/flairconfig', [])->name('flairconfig');
        Route::get('/flaircsv', [])->name('flaircsv');
        Route::get('/flairlist', [])->name('flairlist');
        Route::get('/flairselector', [])->name('flairselector');
        Route::get('/flairtemplate', [])->name('flairtemplate');
        Route::get('/flairtemplate_v2', [])->name('flairtemplate_v2');
        Route::get('/follow_post', [])->name('follow_post');
        Route::get('/friend', [])->name('friend');
        Route::get('/hide', [])->name('hide');
        Route::get('/ignore_reports', [])->name('ignore_reports');
        Route::get('/info', [])->name('info');
        Route::get('/leavecontributor', [])->name('leavecontributor');
        Route::get('/leavemoderator', [])->name('leavemoderator');
        Route::get('/link_flair', [])->name('link_flair');
        Route::get('/link_flair_v2', [])->name('link_flair_v2');
        Route::get('/lock', [])->name('lock');
        Route::get('/marknsfw', [])->name('marknsfw');
        Route::get('/morechildren', [])->name('morechildren');
        Route::get('/mute_message_author', [])->name('mute_message_author');
        Route::get('/needs_captcha', [])->name('needs_captcha');
        Route::get('/read_all_messages', [])->name('read_all_messages');
        Route::get('/read_message', [])->name('read_message');
        Route::get('/recommend/sr/srnames', [])->name('recommend_sr_srnames');
        Route::get('/remove', [])->name('remove');
        Route::get('/report', [])->name('report');
        Route::get('/report_award', [])->name('report_award');
        Route::get('/report_user', [])->name('report_user');
        Route::get('/save', [])->name('save');
        Route::get('/saved_categories', [])->name('saved_categories');
        Route::get('/saved_media_text', [])->name('saved_media_text');
        Route::get('/search_reddit_names', [])->name('search_reddit_names');
        Route::get('/search_subreddits', [])->name('search_subreddits');
        Route::get('/selectflair', [])->name('selectflair');
        Route::get('/sendreplies', [])->name('sendreplies');
        Route::get('/set_contest_mode', [])->name('set_contest_mode');
        Route::get('/set_subreddit_sticky', [])->name('set_subreddit_sticky');
        Route::get('/set_suggested_sort', [])->name('set_suggested_sort');
        Route::get('/setflairenabled', [])->name('setflairenabled');
        Route::get('/setpermissions', [])->name('setpermissions');
        Route::get('/show_comment', [])->name('show_comment');
        Route::get('/site_admin', [])->name('site_admin');
        Route::get('/snooze_reports', [])->name('snooze_reports');
        Route::get('/spoiler', [])->name('spoiler');
        Route::get('/store_visits', [])->name('store_visits');
        Route::get('/submit', [])->name('submit');
        Route::get('/submit_text', [])->name('submit_text');
        Route::get('/subreddit_autocomplete', [])->name('subreddit_autocomplete');
        Route::get('/subreddit_autocomplete_v2', [])->name('subreddit_autocomplete_v2');
        Route::get('/subreddit_stylesheet', [])->name('subreddit_stylesheet');
        Route::get('/subscribe', [])->name('subscribe');
        Route::get('/unblock_subreddit', [])->name('unblock_subreddit');
        Route::get('/uncollapse_message', [])->name('uncollapse_message');
        Route::get('/unfriend', [])->name('unfriend');
        Route::get('/unhide', [])->name('unhide');
        Route::get('/unignore_reports', [])->name('unignore_reports');
        Route::get('/unlock', [])->name('unlock');
        Route::get('/unmarknsfw', [])->name('unmarknsfw');
        Route::get('/unmute_message_author', [])->name('unmute_message_author');
        Route::get('/unread_message', [])->name('unread_message');
        Route::get('/unsave', [])->name('unsave');
        Route::get('/unsnooze_reports', [])->name('unsnooze_reports');
        Route::get('/unspoiler', [])->name('unspoiler');
        Route::get('/update_crowd_control_level', [])->name('update_crowd_control_level');
        Route::get('/upload_sr_img', [])->name('upload_sr_img');
        Route::get('/user_data_by_account_ids', [])->name('user_data_by_account_ids');
        Route::get('/user_flair', [])->name('user_flair');
        Route::get('/user_flair_v2', [])->name('user_flair_v2');
        Route::get('/username_available', [])->name('username_available');
        Route::get('/vote', [])->name('vote');
        Route::get('/widget_image_upload_s3', [])->name('widget_image_upload_s3');
        Route::get('/widget_order/section', [])->name('widget_order_section');
        Route::get('/widgets', [])->name('widgets');

        Route::prefix('about')->group(function () {
            Route::get('/banned', [])->name('banned');
            Route::get('/contributors', [])->name('contributors');
            Route::get('/edited', [])->name('edited');
            Route::get('/location', [])->name('location');
            Route::get('/log', [])->name('log');
            Route::get('/moderators', [])->name('moderators');
            Route::get('/modqueue', [])->name('modqueue');
            Route::get('/muted', [])->name('muted');
            Route::get('/reports', [])->name('reports');
            Route::get('/spam', [])->name('spam');
            Route::get('/unmoderated', [])->name('unmoderated');
            Route::get('/where', [])->name('where');
            Route::get('/wikibanned', [])->name('wikibanned');
            Route::get('/wikicontributors', [])->name('wikicontributors');
        });

        Route::prefix('filter')->group(function () {
            Route::prefix('filterpath')->group(function () {
                Route::get('/', [])->name('filterpath');
                Route::get('/r/srname', [])->name('r_srname');
            });
        });

        Route::prefix('live')->group(function () {
            Route::get('/by_id/names', [])->name('by_id_names');
            Route::get('/create', [])->name('create');
            Route::get('/happening_now', [])->name('happening_now');

            Route::prefix('thread')->group(function () {
                Route::get('/accept_contributor_invite', [])->name('accept_contributor_invite');
                Route::get('/close_thread', [])->name('close_thread');
                Route::get('/delete_update', [])->name('delete_update');
                Route::get('/edit', [])->name('edit');
                Route::get('/hide_discussion', [])->name('hide_discussion');
                Route::get('/invite_contributor', [])->name('invite_contributor');
                Route::get('/leave_contributor', [])->name('leave_contributor');
                Route::get('/report', [])->name('report');
                Route::get('/rm_contributor', [])->name('rm_contributor');
                Route::get('/rm_contributor_invite', [])->name('rm_contributor_invite');
                Route::get('/set_contributor_permissions', [])->name('set_contributor_permissions');
                Route::get('/strike_update', [])->name('strike_update');
                Route::get('/unhide_discussion', [])->name('unhide_discussion');
                Route::get('/update', [])->name('update');
            });
        });

        Route::prefix('mod')->group(function () {
            Route::get('/bulk_read', [])->name('bulk_read');

            Route::prefix('conversations')->group(function () {
                Route::get('/', [])->name('conversations');
                Route::get('/{conversation_id}', [])->name('conversations_by_id');
                Route::get('/{conversation_id}/approve', [])->name('conversations_by_id_approve');
                Route::get('/{conversation_id}/archive', [])->name('conversations_by_id_archive');
                Route::get('/{conversation_id}/disapprove', [])->name('conversations_by_id_disapprove');
                Route::get('/{conversation_id}/highlight', [])->name('conversations_by_id_highlight');
                Route::get('/{conversation_id}/mute', [])->name('conversations_by_id_mute');
                Route::get('/{conversation_id}/temp_ban', [])->name('conversations_by_id_temp_ban');
                Route::get('/{conversation_id}/unarchive', [])->name('conversations_by_id_unarchive');
                Route::get('/{conversation_id}/unban', [])->name('conversations_by_id_unban');
                Route::get('/{conversation_id}/unmute', [])->name('conversations_by_id_unmute');
                Route::get('/{conversation_id}/user', [])->name('conversations_by_id_user');
                Route::get('/read', [])->name('read');
                Route::get('/subreddits', [])->name('subreddits');

                Route::prefix('unread')->group(function () {
                    Route::get('/', [])->name('unread');
                    Route::get('/count', [])->name('count');
                });
            });

            Route::prefix('notes')->group(function () {
                Route::get('/', [])->name('notes');
                Route::get('/recent', [])->name('recent');
            });
        });

        Route::prefix('multi')->group(function () {
            Route::get('/copy', [])->name('copy');
            Route::get('/mine', [])->name('mine');
            Route::get('/user/username', [])->name('user_username');

            Route::prefix('multipath')->group(function () {
                Route::get('/', [])->name('multipath');
                Route::get('/description', [])->name('description');
                Route::get('/r/srname', [])->name('r_srname');
            });
        });

        Route::prefix('widget')->group(function () {
            Route::get('/', [])->name('widget');
            Route::get('/widget_id', [])->name('widget_id');
        });

        Route::prefix('wiki')->group(function () {
            Route::prefix('alloweditor')->group(function () {
                Route::get('/act', [])->name('act');
                Route::get('/add', [])->name('add');
                Route::get('/del', [])->name('del');
            });
            Route::get('/edit', [])->name('edit');
            Route::get('/hide', [])->name('hide');
            Route::get('/revert', [])->name('revert');
        });

        Route::prefix('v1')->group(function () {
            Route::get('/scopes', [])->name('scopes');
            Route::get('/user/username/trophies', [])->name('user_username_trophies');

            Route::prefix('collections')->group(function () {
                Route::get('/add_post_to_collection', [])->name('add_post_to_collection');
                Route::get('/collection', [])->name('collection');
                Route::get('/create_collection', [])->name('create_collection');
                Route::get('/delete_collection', [])->name('delete_collection');
                Route::get('/follow_collection', [])->name('follow_collection');
                Route::get('/remove_post_in_collection', [])->name('remove_post_in_collection');
                Route::get('/reorder_collection', [])->name('reorder_collection');
                Route::get('/subreddit_collections', [])->name('subreddit_collections');
                Route::get('/update_collection_description', [])->name('update_collection_description');
                Route::get('/update_collection_display_layout', [])->name('update_collection_display_layout');
                Route::get('/update_collection_title', [])->name('update_collection_titl');
            });

            Route::prefix('gold')->group(function () {
                Route::get('/gild/fullname', [])->name('gild_fullname');
                Route::get('/give/username', [])->name('give_username');
            });

            Route::prefix('me')->group(function () {
                Route::get('/', [])->name('me');
                Route::get('/blocked', [])->name('blocked');
                Route::get('/friends', [])->name('friends');
                Route::get('/friends/username', [])->name('friends_username');
                Route::get('/karma', [])->name('karma');
                Route::get('/prefs', [])->name('prefs');
                Route::get('/trophies', [])->name('trophies');
            });

            Route::prefix('subreddit')->group(function () {
                Route::get('/emoji.json', [])->name('emoji_json');
                Route::get('/emoji/emoji_name', [])->name('emoji_emoji_name');
                Route::get('/emoji_asset_upload_s3.json', [])->name('emoji_asset_upload_s3_json');
                Route::get('/emoji_custom_size', [])->name('emoji_custom_size');
                Route::get('/emojis/all', [])->name('emojis_all');
                Route::get('/post_requirements', [])->name('post_requirements');
            });
        });
    });

    Route::prefix('live')->group(function () {
        Route::prefix('thread')->group(function () {
            Route::get('/', [])->name('thread');
            Route::get('/about', [])->name('about');
            Route::get('/contributors', [])->name('contributors');
            Route::get('/discussions', [])->name('discussions');
            Route::get('/updates/update_id', [])->name('updates_update_id');
        });
    });

    Route::prefix('message')->group(function () {
        Route::get('/inbox', [])->name('inbox');
        Route::get('/sent', [])->name('sent');
        Route::get('/unread', [])->name('unread');
        Route::get('/where', [])->name('where');
    });

    Route::prefix('prefs')->group(function () {
        Route::get('/blocked', [])->name('blocked');
        Route::get('/friends', [])->name('friends');
        Route::get('/messaging', [])->name('messaging');
        Route::get('/trusted', [])->name('trusted');
        Route::get('/where', [])->name('where');
    });

    Route::prefix('r')->group(function () {
        Route::prefix('subreddit')->group(function () {
            Route::prefix('about')->group(function () {
                Route::get('/', [])->name('about');
                Route::get('/edit', [])->name('edit');
                Route::get('/rules', [])->name('rules');
                Route::get('/traffic', [])->name('traffic');
            });
        });
    });

    Route::prefix('subreddits')->group(function () {
        Route::get('/default', [])->name('default');
        Route::get('/gold', [])->name('gold');
        Route::get('/new', [])->name('new');
        Route::get('/popular', [])->name('popular');
        Route::get('/search', [])->name('search');
        Route::get('/where', [])->name('where');

        Route::prefix('mine')->group(function () {
            Route::get('/contributor', [])->name('contributor');
            Route::get('/moderator', [])->name('moderator');
            Route::get('/streams', [])->name('streams');
            Route::get('/subscriber', [])->name('subscriber');
            Route::get('/where', [])->name('where');
        });
    });

    Route::prefix('user')->group(function () {
        Route::prefix('username')->group(function () {
            Route::get('/about', [])->name('about');
            Route::get('/comments', [])->name('comments');
            Route::get('/downvoted', [])->name('downvoted');
            Route::get('/gilded', [])->name('gilded');
            Route::get('/hidden', [])->name('hidden');
            Route::get('/overview', [])->name('overview');
            Route::get('/saved', [])->name('saved');
            Route::get('/submitted', [])->name('submitted');
            Route::get('/upvoted', [])->name('upvoted');
            Route::get('/where', [])->name('where');
        });
    });

    Route::prefix('users')->group(function () {
        Route::get('/new', [])->name('new');
        Route::get('/popular', [])->name('popular');
        Route::get('/search', [])->name('search');
        Route::get('/where', [])->name('where');
    });

    Route::prefix('wiki')->group(function () {
        Route::get('/discussions/page', [])->name('discussions_page');
        Route::get('/page', [])->name('page');
        Route::get('/pages', [])->name('pages');
        Route::get('/settings/page', [])->name('settings_page');

        Route::prefix('revisions')->group(function () {
            Route::get('/', [])->name('revisions');
            Route::get('/page', [])->name('page');
        });
    });
});

