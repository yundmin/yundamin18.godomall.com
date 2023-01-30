var boardData = {
    writeUrl: '../board/write.php?' + gd_get_url_vars() + '&bdId={0}',
    viewUrl: '../board/view.php?' + gd_get_url_vars() + '&bdId={0}&sno={1}',
    modifyUrl: '../board/write.php?' + gd_get_url_vars() + '&bdId={0}&mode=modify&sno={1}',
    listUrl: '../board/list.php?' + gd_get_url_vars() + '&bdId={0}',
    replyUrl: '../board/write.php?' + gd_get_url_vars() + '&mode=reply&bdId={0}&sno={1}',
}

function gd_get_url_vars(paramKey) {
    if (typeof paramKey == 'undefined') {
        paramKey = '';
    }
    var vars = [], hash;
    var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
    if(window.location.href.indexOf('?')<0) {
        return '';
    }
    for (var i = 0; i < hashes.length; i++) {
        hash = hashes[i].split('=');
        key = hash[0];
        val = hash[1];
        if (paramKey != '') {
            if (key == paramKey) {
                return val;
            }
        }

        if (key == 'sno' || key == 'mode' || key == 'bdId') {
            continue;
        }

        vars.push(hashes[i]);
    }

    if (paramKey != '') {
        return '';
    }

    return vars.join('&');
}

function gd_btn_write(bdId) {
    location.href = boardData.writeUrl.format(bdId);
}

function gd_btn_delete(bdId, sno, auth) {
    switch (auth) {
        case 'n' :
            alert(__('권한이 없습니다.'));
            return;
            break;
        case 'y' :
            if (confirm(__('정말 삭제하시겠습니까?'))) {
                gd_delete_ajax_process();
            }
            break;
        case 'c' :
            passwordLayer.show();
            passwordLayer.btn.unbind('click').bind('click', function () {
                gd_delete_ajax_process();
            });
            break;
    }

    function gd_delete_ajax_process() {
        $.ajax({
            method: "POST",
            url: "../board/board_ps.php",
            data: {mode: 'delete', sno: sno, bdId: bdId, writerPw: passwordLayer.value()},
            dataType: 'json'
        }).success(function (data) {
            if (data['result'] == 'ok') {
                alert(data['msg']);
                location.href = boardData.listUrl.format(bdId);
            }
            else if (data['result'] == 'confirmPassword') {
                passwordLayer.show();
            }
            else {
                alert(data['msg']);
                return;
            }
        }).error(function (e) {
            if(e.responseText)
                alert(e.responseText);
        });
    }

    return;
}

function gd_btn_view(bdId, sno, auth) {

    switch (auth) {
        case 'n' :
        case 'y' :
            location.href = boardData.viewUrl.format(bdId, sno);
            break;
        case 'c' :
            passwordListLayer.show();
            passwordListLayer.inputEl.bind('keydown', function () {
                if (event.keyCode == 13) {
                    passwordListLayer.btnEl.trigger('click');
                }
            });
            passwordListLayer.btnEl.unbind('click').bind('click', function () {
                if (passwordListLayer.inputEl.val() == '') {
                    alert(__('비밀번호를 입력해주세요.'));
                    return false;
                }

                var form= passwordListLayer.element.closest('form');
                form.attr('method', 'post');
                form.attr('action', boardData.viewUrl.format(bdId, sno));
                form.submit();
            });
            break;
    }
}

function gd_btn_reply_write(bdId, sno) {
    location.href = boardData.replyUrl.format(bdId, sno);
}

function gd_btn_list(bdId) {
    location.href = boardData.listUrl.format(bdId);
}

function gd_recommend(bdId, sno) {
    $.get('../board/board_ps.php', {
        'mode': 'recommend',
        'bdId': bdId,
        'sno': sno
    }, function (data, status) {
        if (status == 'success') {
            alert(data['message']);
            $('#recommendCount').find('strong').html(data['recommendCount']);
        }
        else {
            alert('request fail. ajax status (' + status + ')');
        }
    }, 'json');
}

function gd_btn_report(bdId, bdSno, memoSno, goodsNo) {
    if (_.isUndefined(memoSno)) {
        memoSno = 0;
    }
    if (_.isUndefined(goodsNo)) {
        goodsNo = 0;
    }
    var url = "../board/popup_goods_board_report.php?mode=report&bdId=" + bdId + "&bdSno=" + bdSno + "&memoSno=" + memoSno + "&goodsNo=" + goodsNo + '&returnUrl=' + encodeURIComponent(location.href);
    window.open(url, 'report', 'width=850,height=500,scrollbars=yes');
}