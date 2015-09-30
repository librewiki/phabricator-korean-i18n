<?php
/**
 * Created by PhpStorm.
 * User: seyriz
 * Date: 15. 8. 3.
 * Time: 오전 12:45
 */

final class PhabricatorKoreanTranslation
    extends PhutilTranslation {

    public function getLocaleCode() {
        return 'ko_KR';
    }

    protected function getTranslations() {
        return array(
            'No daemon(s) with id(s) "%s" exist!' => array(
                'id:%s인 데몬이 존재하지 않습니다',
                'id:%s인 데몬들이 존재하지 않습니다',
            ),
            'These %d configuration value(s) are related:' => array(
                '이 설정값은 다음과 관계있습니다 :',
                '이 설정값들은 다음과 관계있습니다 :',
            ),
            '%s Task(s)' => array('작업', '작업들'),

            '%s ERROR(S)' => array('오류', '오류들'),
            '%d Error(s)' => array('%d 오류', '%d 오류들'),
            '%d Warning(s)' => array('%d 경고', '%d 경고들'),
            '%d Auto-Fix(es)' => array('%d Auto-Fix', '%d Auto-Fixes'),
            '%d Advice(s)' => array('%d 조언', '%d 개의 조언'),
            '%d Detail(s)' => array('%d 상세', '%d 상세'),

            '(%d line(s))' => array('(%d 줄)', '(%d 줄)'),

            '%d line(s)' => array('%d 줄', '%d 줄'),
            '%d path(s)' => array('%d 위치', '%d 위치들'),
            '%d diff(s)' => array('%d 다른점', '%d 다른점들'),

            '%s DIFF LINK(S)' => array('DIFF LINK', 'DIFF LINKS'),
            'You successfully created %d diff(s).' => array(
                '성공적으로 %d개의 diff를 만들었습니다.',
                '성공적으로 %d개의 diff를 만들었습니다.',
            ),
            'Diff creation failed; see body for %s error(s).' => array(
                'Diff를 만드는데 실패했습니다. 에러를 확인하세요.',
                'Diff를 만드는데 실패했습니다. 에러를 확인하세요.',
            ),

            'There are %d raw fact(s) in storage.' => array(
                ' 스토리지에 가공되지 않은 정보가 %d개 있습니다.',
                ' 스토리지에 가공되지 않은 정보가 %d개 있습니다.',
            ),

            'There are %d aggregate fact(s) in storage.' => array(
                'There is %d aggregate fact in storage.',
                'There are %d aggregate facts in storage.',
            ),

            '%d Commit(s) Awaiting Audit' => array(
                '%d개의 커밋이 검토를 기다리고 있습니다.',
                '%d개의 커밋이 검토를 기다리고 있습니다.',
            ),

            '%d Problem Commit(s)' => array(
                '%d개의 문제 있는 커밋',
                '%d개의 문제 있는 커밋들',
            ),

            '%d Review(s) Blocking Others' => array(
                '%d개의 리뷰가 다른사람을 방해하고 있습니다.',
                '%d개의 리뷰가 다른사람을 방해하고 있습니다.',
            ),

            '%d Review(s) Need Attention' => array(
                '%d개의 리뷰가 관심이 필요합니다.',
                '%d개의 리뷰들이 관심이 필요합니다.',
            ),

            '%d Review(s) Waiting on Others' => array(
                '다른 사람의 리뷰 %d개를 기다리고 있습니다.',
                '다른 사람의 리뷰 %d개를 기다리고 있습니다.',
            ),

            '%d Active Review(s)' => array(
                '활성화된 리뷰 %d개',
                '활성화된 리뷰들 %d개',
            ),

            '%d Flagged Object(s)' => array(
                '%d개의 관심 객체',
                '%d개의 관심 객체',
            ),

            '%d Object(s) Tracked' => array(
                '%d개의 객체 추적됨',
                '%d개의 객체들 추적됨',
            ),
            '%d Assigned Task(s)' => array(
                '%d 할당된 작업',
                '%d 할당된 작업들',
            ),

            'Show %d Lint Message(s)' => array(
                '%d개의 린트 메세지 보이기',
                '%d개의 린트 메세지들 보이기',
            ),
            'Hide %d Lint Message(s)' => array(
                '%d개의 린트 메세지 숨기기',
                '%d개의 린트 메세지들 숨기기',
            ),

            'This is a binary file. It is %s byte(s) in length.' => array(
                '이것은 바이너리 파일입니다. 크기는 %s byte 입니다.',
                '이것은 바이너리 파일입니다. 크기는 %s bytes 입니다.',
            ),

            '%d Action(s) Have No Effect' => array(
                '작업은 효과가 없었습니다.',
                '작업들은 효과가 없었습니다.',
            ),

            '%d Action(s) With No Effect' => array(
                '아무 효과가 없는 작업',
                '아무 효과가 없는 작업들',
            ),

            'Some of your %d action(s) have no effect:' => array(
                '당신의 작업 중 하나가 효과가 없었습니다.:',
                '당신의 작업 중 일부가 효과가 없었습니다.:',
            ),

            'Apply remaining %d action(s)?' => array(
                '남아있는 작업을 적용할까요?',
                '남아있는 작업들을 적용할까요?',
            ),

            'Apply %d Other Action(s)' => array(
                '남아있는 작업을 적용했습니다.',
                '남아있는 작업들을 적용했습니다.',
            ),

            'The %d action(s) you are taking have no effect:' => array(
                '당신이 하려는 작업은 효과가 없습니다.:',
                '당신이 하려는 작업들은 효과가 없습니다.:',
            ),

            '%s edited member(s), added %d: %s; removed %d: %s.' =>
                '%s이(가) 구성원 목록을 편집했습니다, 추가됨: %3$s; 제거됨: %5$s.',

            '%s added %s member(s): %s.' => array(
                array(
                    '%s가 구성원으로 추가했습니다.: %3$s.',
                    '%s가 구성원으로 추가했습니다.: %3$s.',
                ),
            ),

            '%s removed %s member(s): %s.' => array(
                array(
                    '%s가 구성원을 삭제했습니다.: %3$s.',
                    '%s가 구성원을 삭제했습니다.: %3$s.',
                ),
            ),

            '%s edited project(s), added %s: %s; removed %s: %s.' =>
                '%s가 프로젝트를 편집했습니다, 추가됨: %3$s; 삭제됨: %5$s.',

            '%s added %s project(s): %s.' => array(
                array(
                    '%s가 프로젝트를 추가했습니다.: %3$s.',
                    '%s가 프로젝트들을 추가했습니다.: %3$s.',
                ),
            ),

            '%s removed %s project(s): %s.' => array(
                array(
                    '%s가 프로젝트를 삭제했습니다.: %3$s.',
                    '%s가 프로젝트들을 삭제했습니다.: %3$s.',
                ),
            ),

            '%s merged %d task(s): %s.' => array(
                array(
                    '%s가 작업을 병합했습니다.: %3$s.',
                    '%s가 작업들을 병합했습니다.: %3$s.',
                ),
            ),

            '%s merged %d task(s) %s into %s.' => array(
                array(
                    '%s가 %3$s을(를) %4$s(으)로 병합했습니다.',
                    '%s가 %3$s들을 %4$s(으)로 병합했습니다.',
                ),
            ),

            '%s added %s voting user(s): %s.' => array(
                array(
                    '%s가 투표 사용자를 추가했습니다.: %3$s.',
                    '%s가 투표 사용자들을 추가했습니다.: %3$s.',
                ),
            ),

            '%s removed %s voting user(s): %s.' => array(
                array(
                    '%s가 투표 사용자를 삭제했습니다.: %3$s.',
                    '%s가 투표 사용자들을 삭제했습니다.: %3$s.',
                ),
            ),

            '%s added %s blocking task(s): %s.' => array(
                array(
                    '%s가 작업을 차단중입니다.: %3$s.',
                    '%s가 작업들을 차단중입니다.: %3$s.',
                ),
            ),

            '%s added %s blocked task(s): %s.' => array(
                array(
                    '%s가 작업을 차단했습니다.: %3$s.',
                    '%s가 작업들을 차단했습니다.: %3$s.',
                ),
            ),

            '%s removed %s blocking task(s): %s.' => array(
                array(
                    '%s가 차단중인 작업을 삭제했습니다.: %3$s.',
                    '%s가 차단중인 작업들을 삭제했습니다.: %3$s.',
                ),
            ),

            '%s removed %s blocked task(s): %s.' => array(
                array(
                    '%s가 차단된 작업을 삭제했습니다.: %3$s.',
                    '%s가 차단된 작업들을 삭제했습니다.: %3$s.',
                ),
            ),

            '%s added %s blocking task(s) for %s: %s.' => array(
                array(
                    '%s가 %3$s을(를) 위해 작업들을 차단중입니다.: %4$s.',
                    '%s가 %3$s을(를) 위해 작업들을 차단중입니다.: %4$s.',
                ),
            ),

            '%s added %s blocked task(s) for %s: %s.' => array(
                array(
                    '%s가 %3$s을(를) 위해 작업을 차단했습니다.: %4$s.',
                    '%s가 %3$s을(를) 위해 작업을 차단했습니다.: %4$s.',
                ),
            ),

            '%s removed %s blocking task(s) for %s: %s.' => array(
                array(
                    '%s가 %3$s을(를) 위해 차단중인 작업을 삭제했습니다.: %4$s.',
                    '%s가 %3$s을(를) 위해 차단중인 작업을 삭제했습니다.: %4$s.',
                ),
            ),

            '%s removed %s blocked task(s) for %s: %s.' => array(
                array(
                    '%s가 %3$s을(를) 위해 차단된 작업을 삭제했습니다.: %4$s.',
                    '%s가 %3$s을(를) 위해 차단된 작업들을 삭제했습니다.: %4$s.',
                ),
            ),

            '%s edited blocking task(s), added %s: %s; removed %s: %s.' =>
                '%s가 차단중인 작업을 수정했습니다. 추가됨: %3$s; 삭제됨: %5$s.',

            '%s edited blocking task(s) for %s, added %s: %s; removed %s: %s.' =>
                '%s가 %s을(를) 위해 차단중인 작업을 수정했습니다. 추가됨: %4$s; 삭제됨: %6$s.',

            '%s edited blocked task(s), added %s: %s; removed %s: %s.' =>
                '%s가 차단된 작업을 수정했습니다. 추가됨: %3$s; 삭제됨: %5$s.',

            '%s edited blocked task(s) for %s, added %s: %s; removed %s: %s.' =>
                '%s가 %s을(를) 위해 차단된 작업을 수정했습니다. 추가됨: %4$s; 삭제됨: %6$s.',

            '%s edited answer(s), added %s: %s; removed %d: %s.' =>
                '%s가 답변을 수정했습니다. 추가됨: %3$s; 삭제됨: %5$s.',

            '%s added %s answer(s): %s.' => array(
                array(
                    '%s가 답변을 추가했습니다.: %3$s.',
                    '%s가 답변들을 추가했습니다.: %3$s.',
                ),
            ),

            '%s removed %s answer(s): %s.' => array(
                array(
                    '%s가 답변을 삭제했습니다.: %3$s.',
                    '%s가 답변들을 삭제했습니다.: %3$s.',
                ),
            ),

            '%s edited question(s), added %s: %s; removed %s: %s.' =>
                '%s가 질문을 수정했습니다. 추가됨: %3$s; 삭제됨: %5$s.',

            '%s added %s question(s): %s.' => array(
                array(
                    '%s 님이 질문을 추가했습니다: %3$s.',
                    '%s 님이 질문을 추가했습니다: %3$s.',
                ),
            ),

            '%s removed %s question(s): %s.' => array(
                array(
                    '%s 님이 질문을 삭제했습니다: %3$s.',
                    '%s 님이 질문들을 삭제했습니다: %3$s.',
                ),
            ),

            '%s edited mock(s), added %s: %s; removed %s: %s.' =>
                '%s 님이 mock을 편집했습니다. 추가됨: %3$s; 삭제됨: %5$s.',

            '%s added %s mock(s): %s.' => array(
                array(
                    '%s 님이 mock을 추가했습니다: %3$s.',
                    '%s 님이 mock들을 추가했습니다: %3$s.',
                ),
            ),

            '%s removed %s mock(s): %s.' => array(
                array(
                    '%s 님이 mock을 삭제했습니다: %3$s.',
                    '%s 님이 mock들을 삭제했습니다: %3$s.',
                ),
            ),

            '%s added %s task(s): %s.' => array(
                array(
                    '%s 님이 작업을 추가했습니다: %3$s.',
                    '%s 님이 작업을 추가했습니다: %3$s.',
                ),
            ),

            '%s removed %s task(s): %s.' => array(
                array(
                    '%s 님이 작업을 삭제했습니다: %3$s.',
                    '%s 님이 작업들을 삭제했습니다: %3$s.',
                ),
            ),

            '%s edited file(s), added %s: %s; removed %s: %s.' =>
                '%s 님이 파일을 바꾸었습니다. 추가됨: %3$s; 삭제됨: %5$s.',

            '%s added %s file(s): %s.' => array(
                array(
                    '%s 님이 파일을 추가했습니다: %3$s.',
                    '%s 님이 파일들을 추가했습니다: %3$s.',
                ),
            ),

            '%s removed %s file(s): %s.' => array(
                array(
                    '%s 님이 파일을 삭제했습니다: %3$s.',
                    '%s 님이 파일들을 삭제했습니다: %3$s.',
                ),
            ),

            '%s edited contributor(s), added %s: %s; removed %s: %s.' =>
                '%s 님이 기여자 목록을 수정했습니다. 추가됨: %3$s; 삭제됨: %5$s.',

            '%s added %s contributor(s): %s.' => array(
                array(
                    '%s 님이 기여자를 추가했습니다: %3$s.',
                    '%s 님이 기여자를 추가했습니다: %3$s.',
                ),
            ),

            '%s removed %s contributor(s): %s.' => array(
                array(
                    '%s 님이 기여자를 제거했습니다: %3$s.',
                    '%s 님이 기여자를 제거했습니다: %3$s.',
                ),
            ),

            '%s edited %s reviewer(s), added %s: %s; removed %s: %s.' =>
                '%s 님이 검토자 목록을 수정했습니다, 추가됨: %4$s; 삭제됨: %6$s.',

            '%s edited %s reviewer(s) for %s, added %s: %s; removed %s: %s.' =>
                '%s 님이 "%3$s" 사유로 검토자 목록을 수정했습니다. 추가됨: %5$s; 삭제됨: %7$s.',

            '%s added %s reviewer(s): %s.' => array(
                array(
                    '%s 님이 검토자를 추가했습니다: %3$s.',
                    '%s 님이 검토자를 추가했습니다: %3$s.',
                ),
            ),

            '%s removed %s reviewer(s): %s.' => array(
                array(
                    '%s 님이 검토자를 제거했습니다: %3$s.',
                    '%s 님이 검토자를 제거했습니다: %3$s.',
                ),
            ),

            '%d other(s)' => array(
                '외 1명',
                '외 %d명',
            ),

            '%s edited subscriber(s), added %d: %s; removed %d: %s.' =>
                '님이 구독자 목록을 수정했습니다. 추가됨: %3$s; 제거됨: %5$s.',

            '%s added %d subscriber(s): %s.' => array(
                array(
                    '%s 님이 구독자를 추가했습니다: %3$s.',
                    '%s 님이 구독자를 추가했습니다: %3$s.',
                ),
            ),

            '%s removed %d subscriber(s): %s.' => array(
                array(
                    '%s 님이 구독자를 제거했습니다: %3$s.',
                    '%s 님이 구독자를 제거했습니다: %3$s.',
                ),
            ),

            '%s edited watcher(s), added %s: %s; removed %d: %s.' =>
                '%s 님이 주시자 목록을 수정했습니다. 추가됨: %3$s; 제거됨: %5$s.',

            '%s added %s watcher(s): %s.' => array(
                array(
                    '%s 님이 주시자를 추가했습니다: %3$s.',
                    '%s 님이 주시자를 추가했습니다: %3$s.',
                ),
            ),

            '%s removed %s watcher(s): %s.' => array(
                array(
                    '%s 님이 주시자를 제거했습니다: %3$s.',
                    '%s 님이 주시자를 제거했습니다: %3$s.',
                ),
            ),

            '%s edited participant(s), added %d: %s; removed %d: %s.' =>
                '%s 님이 참여자 목록을 수정했습니다. 추가됨: %3$s; 삭제됨: %5$s.',

            '%s added %d participant(s): %s.' => array(
                array(
                    '%s 님이 참여자를 추가했습니다: %3$s.',
                    '%s 님이 참여자를 추가했습니다: %3$s.',
                ),
            ),

            '%s removed %d participant(s): %s.' => array(
                array(
                    '%s 님이 참여자를 제거했습니다: %3$s.',
                    '%s 님이 참여자를 제거했습니다: %3$s.',
                ),
            ),

            '%s edited image(s), added %d: %s; removed %d: %s.' =>
                '%s 님이 이미지를 편집했습니다. 추가됨: %3$s; 제거됨: %5$s',

            '%s added %d image(s): %s.' => array(
                array(
                    '%s 님이 이미지를 추가했습니다: %3$s.',
                    '%s 님이 이미지를 추가했습니다: %3$s.',
                ),
            ),

            '%s removed %d image(s): %s.' => array(
                array(
                    '%s 님이 이미지를 삭제했습니다: %3$s.',
                    '%s 님이 이미지를 삭제했습니다: %3$s.',
                ),
            ),

            '%s Line(s)' => array(
                '%s 줄',
                '%s 줄',
            ),

            'Indexing %d object(s) of type %s.' => array(
                '%s 객체 %d 개를 색인 중입니다.',
                '%s 객체 %d 개를 색인 중입니다.',
            ),

            'Run these %d command(s):' => array(
                '다음 명령어를 실행하세요:',
                '다음 명령어들을 실행하세요:',
            ),

            'Install these %d PHP extension(s):' => array(
                '다음 PHP 확장 기능을 설치하세요:',
                '다음 PHP 확장 기능들을 설치하세요:',
            ),

            'The current Phabricator configuration has these %d value(s):' => array(
                '현재 Phabricator 설정값은 %d 값을 가집니다.',
                '현재 Phabricator 설정값은 %d 값을 가집니다.',
            ),

            'The current MySQL configuration has these %d value(s):' => array(
                '현재 MySQL 설정값은 %d 값을 가집니다.',
                '현재 MySQL 설정값은 %d 값을 가집니다.',
            ),

            'You can update these %d value(s) here:' => array(
                '여기서 이 값을 수정할 수 있습니다:',
                '여기서 이 값들을 수정할 수 있습니다:',
            ),

            'The current PHP configuration has these %d value(s):' => array(
                '현재 PHP 설정에 있는 값:',
                '현재 PHP 설정에 있는 값들:',
            ),

            'To update these %d value(s), edit your PHP configuration file.' => array(
                '이 %d 값을 수정하려면, PHP 설정 파일을 편집해야 합니다.',
                '이 %d 값들을 수정하려면, PHP 설정 파일을 편집해야 합니다.',
            ),

            'To update these %d value(s), edit your PHP configuration file, located '.
            'here:' => array(
                '이 값을 수정하려면, 여기에 위치한 PHP 설정 파일을 편집하면 됩니다:',
                '이 값들을 수정하려면, 여기에 위치한 PHP 설정 파일을 편집하면 됩니다:',
            ),

            'PHP also loaded these %s configuration file(s):' => array(
                'PHP에서 이 설정 파일도 불러왔습니다.',
                'PHP에서 이 설정 파일들도 불러왔습니다.',
            ),

            'You have %d unresolved setup issue(s)...' => array(
                '풀리지 않은 설정 이슈가 있습니다...',
                '%d개의 풀리지 않은 설정 이슈들이 있습니다...',
            ),

            '%s added %d inline comment(s).' => array(
                array(
                    '%s가 인라인 의견을 추가했습니다.',
                    '%s가 인라인 의견들을 추가했습니다.',
                ),
            ),

            '%d comment(s)' => array('%d개의 의견', '%d개의 의견들'),
            '%d rejection(s)' => array('%d개의 거부', '%d개의 거부들'),
            '%d update(s)' => array('%d개의 수정사항', '%d개의 수정사항들'),

            'This configuration value is defined in these %d '.
            'configuration source(s): %s.' => array(
                '이 구성 값은 이 구성 소스에서 정의되있습니다 :'.
                '%2$s.',
                '이 구성 값은 이 %d개의 구성 소스들에서 정의되있습니다.'.
                ' : %s.',
            ),

            '%d Open Pull Request(s)' => array(
                '%d개의 열린 Pull Request',
                '%d개의 열린 Pull Request들',
            ),

            'Stale (%s day(s))' => array(
                '비활동적 (%s일)',
                '비활동적 (%s일)',
            ),

            'Old (%s day(s))' => array(
                '오래됨 (%s일)',
                '오래됨 (%s일)',
            ),

            '%s Commit(s)' => array(
                '%s개의 커밋',
                '%s개의 커밋들',
            ),

            '%s attached %d file(s): %s.' => array(
                array(
                    '%s가 파일을 첨부했습니다: %3$s.',
                    '%s가 파일들을 첨부했습니다: %3$s.',
                ),
            ),

            '%s detached %d file(s): %s.' => array(
                array(
                    '%s가 첨부파일을 내렸습니다: %3$s.',
                    '%s가 첨부파일들을 내렸습니다: %3$s.',
                ),
            ),

            '%s changed file(s), attached %d: %s; detached %d: %s.' =>
                '%s가 파일들을 변경했습니다, 첨부됨: %3$s; 내려감: %5$s.',


            '%s added %s dependencie(s): %s.' => array(
                array(
                    '%s가 의존성을 추가했습니다: %3$s.',
                    '%s가 의존성들을 추가했습니다: %3$s.',
                ),
            ),

            '%s added %s dependencie(s) for %s: %s.' => array(
                array(
                    '%s가 %3$s에 의존성을 추가했습니다: %4$s.',
                    '%s가 %3$s에 의존성들을 추가했습니다: %4$s.',
                ),
            ),

            '%s removed %s dependencie(s): %s.' => array(
                array(
                    '%s가 의존성을 제거했습니다: %3$s.',
                    '%s가 의존성들을 제거했습니다: %3$s.',
                ),
            ),

            '%s removed %s dependencie(s) for %s: %s.' => array(
                array(
                    '%s가 %3$s에서 의존성을 제거했습니다: %4$s.',
                    '%s가 %3$s에서 의존성들을 제거했습니다: %4$s.',
                ),
            ),

            '%s added %s dependent revision(s): %s.' => array(
                array(
                    '%s가 의존하는 리비전을 추가했습니다: %3$s.',
                    '%s가 의존하는 리비전들을 추가했습니다: %3$s.',
                ),
            ),

            '%s added %s dependent revision(s) for %s: %s.' => array(
                array(
                    '%s가 %3$s에 의존하는 리비전을 추가했습니다: %4$s.',
                    '%s가 %3$s에 의존하는 리비전들을 추가했습니다: %4$s.',
                ),
            ),

            '%s removed %s dependent revision(s): %s.' => array(
                array(
                    '%s가 의존하는 리비전을 제거했습니다: %3$s.',
                    '%s가 의존하는 리비전들을 제거했습니다: %3$s.',
                ),
            ),

            '%s removed %s dependent revision(s) for %s: %s.' => array(
                array(
                    '%s가 %3$s에서 의존하는 리비전을 제거했습니다: %4$s.',
                    '%s가 %3$s에서 의존하는 리비전들을 제거했습니다: %4$s.',
                ),
            ),

            '%s added %s commit(s): %s.' => array(
                array(
                    '%s가 커밋을 추가했습니다: %3$s.',
                    '%s가 커밋들을 추가했습니다: %3$s.',
                ),
            ),

            '%s removed %s commit(s): %s.' => array(
                array(
                    '%s가 커밋을 제거했습니다: %3$s.',
                    '%s가 커밋들을 제거했습니다: %3$s.',
                ),
            ),

            '%s edited commit(s), added %s: %s; removed %s: %s.' =>
                '%s가 커밋들을 편집했습니다, %3$s 추가됬고 %5$s 제거됬습니다.',

            '%s added %s reverted commit(s): %s.' => array(
                array(
                    '%s가 되돌리는 커밋을 추가했습니다: %3$s.',
                    '%s가 되돌리는 커밋들을 추가했습니다: %3$s.',
                ),
            ),

            '%s removed %s reverted commit(s): %s.' => array(
                array(
                    '%s가 되돌리는 커밋을 제거했습니다: %3$s.',
                    '%s가 되돌리는 커밋들을 제거했습니다: %3$s.',
                ),
            ),

            '%s edited reverted commit(s), added %s: %s; removed %s: %s.' =>
                '%s가 되돌리는 커밋들을 편집했습니다, %3$s 추가됨 %5$s 제거됨.',

            '%s added %s reverted commit(s) for %s: %s.' => array(
                array(
                    '%s가 %3$s에 되돌리는 커밋을 추가했습니다: %4$s.',
                    '%s가 %3$s에 되돌리는 커밋들을 추가했습니다: %4$s.',
                ),
            ),

            '%s removed %s reverted commit(s) for %s: %s.' => array(
                array(
                    '%s가 %3$s에서 되돌리는 커밋을 제거했습니다: %4$s.',
                    '%s가 %3$s에서 되돌리는 커밋들을 제거했습니다: %4$s.',
                ),
            ),

            '%s edited reverted commit(s) for %s, added %s: %s; removed %s: %s.' =>
                '%s가 %2$s에서 되돌리는 커밋들을 편집했습니다, %4$s 추가됨 %6$s 제거됨.',

            '%s added %s reverting commit(s): %s.' => array(
                array(
                    '%s 님이 되돌리는 커밋을 추가했습니다: %3$s.',
                    '%s 님이 되돌리는 커밋을 추가했습니다: %3$s.',
                ),
            ),

            '%s removed %s reverting commit(s): %s.' => array(
                array(
                    '%s 님이 되돌리는 커밋을 삭제했습니다: %3$s.',
                    '%s 님이 되돌리는 커밋을 삭제했습니다: %3$s.',
                ),
            ),

            '%s edited reverting commit(s), added %s: %s; removed %s: %s.' =>
                '%s 님이 되돌리는 커밋을 수정했습니다. 추가됨: %3$s, 삭제됨: %5$s.',

            '%s added %s reverting commit(s) for %s: %s.' => array(
                array(
                    '%s 님이 %3$s에 되돌리는 커밋을 추가했습니다: %4$s.',
                    '%s 님이 %3$s에 되돌리는 커밋을 추가했습니다: %4$s.',
                ),
            ),

            '%s removed %s reverting commit(s) for %s: %s.' => array(
                array(
                    '%s 님이 %3$s 에서 되돌리는 커밋을 삭제했습니다: %4$s.',
                    '%s 님이 %3$s 에서 되돌리는 커밋을 삭제했습니다: %4$s.',
                ),
            ),

            '%s edited reverting commit(s) for %s, added %s: %s; removed %s: %s.' =>
                '%s 님이 %s 의 되돌리는 커밋을 수정했습니다: 추가됨: %4$s; 삭제됨: %6$s.',

            '%s changed project member(s), added %d: %s; removed %d: %s.' =>
                '%s 님이 프로젝트 구성원 목록을 수정했습니다. 추가됨: %3$s, 제거됨: %5$s.',

            '%s added %d project member(s): %s.' => array(
                array(
                    '%s 님이 프로젝트 구성원을 추가했습니다: %3$s.',
                    '%s 님이 프로젝트 구성원을 추가했습니다: %3$s.',
                ),
            ),

            '%s removed %d project member(s): %s.' => array(
                array(
                    '%s 님이 구성원을 제거했습니다: %3$s.',
                    '%s 님이 구성원을 제거했습니다: %3$s.',
                ),
            ),

            '%d project hashtag(s) are already used: %s.' => array(
                '프로젝트 해시태그 %2$s 는 이미 사용 중입니다.',
                '%d 프로젝트 해시태그는 이미 사용 중입니다: %2$s.',
            ),

            '%s changed project hashtag(s), added %d: %s; removed %d: %s.' =>
                '%s 님이 프로젝트 해시태그를 바꾸었습니다. 추가됨: %3$s; 삭제됨: %5$s.',

            '%s added %d project hashtag(s): %s.' => array(
                array(
                    '%s 님이 해시태그를 추가했습니다: %3$s.',
                    '%s 님이 해시태그를 추가했습니다: %3$s.',
                ),
            ),

            '%s removed %d project hashtag(s): %s.' => array(
                array(
                    '%s 님이 해시태그를 삭제했습니다: %3$s.',
                    '%s 님이 해시태그를 삭제했습니다: %3$s.',
                ),
            ),

            '%s changed %s hashtag(s), added %d: %s; removed %d: %s.' =>
                '%s 님이 %s 의 해시태그를 바꾸었습니다. 추가됨: %4$s, 삭제됨: %6$s.',

            '%s added %d %s hashtag(s): %s.' => array(
                array(
                    '%s 님이 %3$s 에 해시태그를 추가했습니다: %4$s.',
                    '%s 님이 %3$s 에 해시태그를 추가했습니다: %4$s.',
                ),
            ),

            '%s removed %d %s hashtag(s): %s.' => array(
                array(
                    '%s 님이 %3$s 에서 해시태그를 제거했습니다: %4$s.',
                    '%s 님이 %3$s 에서 해시태그를 제거했습니다: %4$s.',
                ),
            ),

            '%d User(s) Need Approval' => array(
                '%d 명의 사용자가 승인을 요청했습니다',
                '%d 명의 사용자가 승인을 요청했습니다',
            ),

            '%s older changes(s) are hidden.' => array(
                '%d 오래된 활동내역은 숨겨졌습니다.',
                '%d 오래된 활동내역은 숨겨졌습니다.',
            ),

            '%s, %s line(s)' => array(
                '%s, %s 줄',
                '%s, %s 줄',
            ),

            '%s pushed %d commit(s) to %s.' => array(
                array(
                    '%s 님이 %3$s 에 커밋을 푸시했습니다.',
                    '%s 님이 %s 에 %d 개의 커밋을 푸시했습니다.',
                ),
            ),

            '%s commit(s)' => array(
                '1 개의 커밋',
                '%s 개의 커밋',
            ),

            '%s removed %s JIRA issue(s): %s.' => array(
                array(
                    '%s 님이 JIRA 이슈를 삭제했습니다: %3$s.',
                    '%s 님이 JIRA 이슈를 삭제했습니다: %3$s.',
                ),
            ),

            '%s added %s JIRA issue(s): %s.' => array(
                array(
                    '%s 님이 JIRA 이슈를 추가했습니다: %3$s.',
                    '%s 님이 JIRA 이슈를 추가했습니다: %3$s.',
                ),
            ),

            '%s added %s required legal document(s): %s.' => array(
                array(
                    '%s 님이 필요한 법적 서류를 추가했습니다: %3$s.',
                    '%s 님이 필요한 법적 서류를 추가했습니다: %3$s.',
                ),
            ),

            '%s updated JIRA issue(s): added %s %s; removed %d %s.' =>
                '%s 님이 JIRA 이슈를 업데이트했습니다: 추가됨: %3$s, 삭제됨: %5$s.',

            '%s edited %s task(s), added %s: %s; removed %s: %s.' =>
                '%s 님이 작업을 편집했습니다. 추가됨: %4$s, 삭제됨: %6$s.',

            '%s added %s task(s) to %s: %s.' => array(
                array(
                    '%s 님이 %3$s 에 작업을 추가했습니다: %4$s.',
                    '%s 님이 %3$s 에 작업을 추가했습니다: %4$s.',
                ),
            ),

            '%s removed %s task(s) from %s: %s.' => array(
                array(
                    '%s 님이 %3$s 에서 작업을 제거했습니다: %4$s.',
                    '%s 님이 %3$s 에서 작업을 제거했습니다: %4$s.',
                ),
            ),

            '%s edited %s task(s) for %s, added %s: %s; removed %s: %s.' =>
                '%s 님이 %3$s 의 작업을 수정했습니다. 추가됨: %5$s;, 삭제됨: %7$s.',

            '%s edited %s commit(s), added %s: %s; removed %s: %s.' =>
                '%s 님이 커밋을 수정했습니다. 추가됨: %4$s, 삭제됨: %6$s.',

            '%s added %s commit(s) to %s: %s.' => array(
                array(
                    '%s 님이 %3$s 에 커밋을 추가했습니다: %4$s.',
                    '%s 님이 %3$s 에 커밋을 추가했습니다: %4$s.',
                ),
            ),

            '%s removed %s commit(s) from %s: %s.' => array(
                array(
                    '%s 님이 %3$s 에서 커밋을 삭제했습니다: %4$s.',
                    '%s 님이 %3$s 에서 커밋을 삭제했습니다: %4$s.',
                ),
            ),

            '%s edited %s commit(s) for %s, added %s: %s; removed %s: %s.' =>
                '%s 님이 %3$s 의 커밋을 수정했습니다. 추가됨: %5$s, 삭제됨: %7$s.',

            '%s added %s revision(s): %s.' => array(
                array(
                    '%s 님이 리비전을 추가했습니다: %3$s.',
                    '%s 님이 리비전을 추가했습니다: %3$s.',
                ),
            ),

            '%s removed %s revision(s): %s.' => array(
                array(
                    '%s 님이 리비전을 삭제했습니다: %3$s.',
                    '%s 님이 리비전을 삭제했습니다: %3$s.',
                ),
            ),

            '%s edited %s revision(s), added %s: %s; removed %s: %s.' =>
                '%s 님이 리비전을 편집했습니다. 추가됨: %4$s, 삭제됨: %6$s.',

            '%s added %s revision(s) to %s: %s.' => array(
                array(
                    '%s 님이 %3$s 에 리비전을 추가했습니다: %4$s.',
                    '%s 님이 %3$s 에 리비전을 추가했습니다: %4$s.',
                ),
            ),

            '%s removed %s revision(s) from %s: %s.' => array(
                array(
                    '%s가 %3$s에서 리비전을 제거했습니다: %4$s.',
                    '%s가 %3$s에서 리비전들을 제거했습니다: %4$s.',
                ),
            ),

            '%s edited %s revision(s) for %s, added %s: %s; removed %s: %s.' =>
                '%s가 %3$s의 리비전들을 편집했습니다, %5$s 추가됨 %7$s 삭제됨.',

            '%s edited %s project(s), added %s: %s; removed %s: %s.' =>
                '%s가 프로젝트들을 편집했습니다. %4$s가 추가됨 %6$s 삭제됨.',

            '%s added %s project(s) to %s: %s.' => array(
                array(
                    '%s가 %3$s에 프로젝트를 추가했습니다: %4$s.',
                    '%s가 %3$s에 프로젝트들을 추가했습니다: %4$s.',
                ),
            ),

            '%s removed %s project(s) from %s: %s.' => array(
                array(
                    '%s가 %3$s에서 프로젝트를 제거했습니다: %4$s.',
                    '%s가 %3$s에서 프로젝트들을 제거했습니다: %4$s.',
                ),
            ),

            '%s edited %s project(s) for %s, added %s: %s; removed %s: %s.' =>
                '%s가 %3$s에서 프로젝트를 편집했습니다, %5$s 추가됨 %7$s 제거됨.',

            '%s added %s panel(s): %s.' => array(
                array(
                    '%s가 패널을 추가했습니다: %3$s.',
                    '%s가 패널들을 추가했습니다: %3$s.',
                ),
            ),

            '%s removed %s panel(s): %s.' => array(
                array(
                    '%s가 패널을 제거했습니다: %3$s.',
                    '%s가 패널들을 제거했습니다: %3$s.',
                ),
            ),

            '%s edited %s panel(s), added %s: %s; removed %s: %s.' =>
                '%s가 패널들을 수정했습니다. %4$s 추가됨 %6$s 제거됨.',

            '%s added %s dashboard(s): %s.' => array(
                array(
                    '%s가 대시보드를 추가했습니다: %3$s.',
                    '%s가 대시보드들을 추가했습니다: %3$s.',
                ),
            ),

            '%s removed %s dashboard(s): %s.' => array(
                array(
                    '%s가 대시보드를 제거했습니다: %3$s.',
                    '%s가 대시보드들을 제거했습니다: %3$s.',
                ),
            ),

            '%s edited %s dashboard(s), added %s: %s; removed %s: %s.' =>
                '%s가 대시보드를 편집했습니다, %4$s가 추가됬고 %6$s가 제거됬습니다.',

            '%s added %s edge(s): %s.' => array(
                array(
                    '%s가 엣지를 추가했습니다: %3$s.',
                    '%s가 엣지들을 추가했습니다: %3$s.',
                ),
            ),

            '%s added %s edge(s) to %s: %s.' => array(
                array(
                    '%s가 %3$s에 엣지를 추가했습니다: %4$s.',
                    '%s가 %3$s에 엣지들을 추가했습니다: %4$s.',
                ),
            ),

            '%s removed %s edge(s): %s.' => array(
                array(
                    '%s가 엣지를 제거했습니다: %3$s.',
                    '%s가 엣지들을 제거했습니다: %3$s.',
                ),
            ),

            '%s removed %s edge(s) from %s: %s.' => array(
                array(
                    '%s가 %3$s에서 엣지를 제거했습니다: %4$s.',
                    '%s가 %3$s에서 엣지들을 제거했습니다: %4$s.',
                ),
            ),

            '%s edited edge(s), added %s: %s; removed %s: %s.' =>
                '%s가 엣지들을 편집했습니다, %3$s가 추가되었고 %5$s가 제거되었습니다.',

            '%s edited %s edge(s) for %s, added %s: %s; removed %s: %s.' =>
                '%s가 %3$s에서 엣지들을 편집했습니다, %5$s가 추가되었고 %7$s가 제거되었습니다.',

            '%s added %s member(s) for %s: %s.' => array(
                array(
                    '%s가 %3$s에 구성원을 추가했습니다: %4$s.',
                    '%s가 %3$s에 여러 명의 구성원을 추가했습니다: %4$s.',
                ),
            ),

            '%s removed %s member(s) for %s: %s.' => array(
                array(
                    '%s가 %3$s에서 구성원을 뺐습니다: %4$s.',
                    '%s가 %3$s에서 여러 명의 구성원을 뺐습니다: %4$s.',
                ),
            ),

            '%s edited %s member(s) for %s, added %s: %s; removed %s: %s.' =>
                '%s가 %3$s의 구성원 명단을 수정했습니다, %5$s가 추가되고 %7$s가 나갔습니다.',

            '%d related link(s):' => array(
                '관련 링크:',
                '관련 링크들:',
            ),

            'You have %d unpaid invoice(s).' => array(
                '아직 결제하지 않은 요금이 있습니다.',
                '아직 결제하지 않은 요금들이 있습니다.',
            ),

            'The configurations differ in the following %s way(s):' => array(
                '구성이 다릅니다:',
                '구성이 이러이러한 방향에서 다릅니다:',
            ),

            'Phabricator is configured with an email domain whitelist (in %s), so '.
            'only users with a verified email address at one of these %s '.
            'allowed domain(s) will be able to register an account: %s' => array(
                array(
                    '이메일 도메인 화이트리스트가 구성되었으므로 (%s에서), '.
                    '%3$s에서 확인된 이메일 주소를 가진 자만이'.
                    '계정을 만들 수 있습니다.',
                    '이메일 도메인 화이트리스트가 구성되었으므로 (%s에서), '.
                    '이 허용된 도메인 중에서 확인된 이메일 주소를 가진 자만이 '.
                    '계정을 만들 수 있습니다: %3$s',
                ),
            ),

            'Show First %d Line(s)' => array(
                '첫 줄 보기',
                '첫 %d개의 줄 보기',
            ),

            "\xE2\x96\xB2 Show %d Line(s)" => array(
                "\xE2\x96\xB2 줄 보기",
                "\xE2\x96\xB2 %d개의 줄 보기",
            ),

            'Show All %d Line(s)' => array(
                '줄 보기',
                '모든 %d개의 줄 보기',
            ),

            "\xE2\x96\xBC Show %d Line(s)" => array(
                "\xE2\x96\xBC 줄 보기",
                "\xE2\x96\xBC %d개의 줄 보기",
            ),

            'Show Last %d Line(s)' => array(
                '마지막 줄 보기',
                '마지막 %d개의 줄 보기',
            ),

            '%s marked %s inline comment(s) as done and %s inline comment(s) as '.
            'not done.' => array(
                array(
                    array(
                        '%s가 하나의 인라인 의견을 완료됨으로 표시했고 하나의 인라인 의견을 완료되지 않음으로 표시했습니다',
                        '%s가 하나의 인라인 의견을 완료됨으로 표시했고 %3$s개의 인라인 의견을 완료되지 않음으로 표시했습니다',
                    ),
                    array(
                        '%s가 %s 인라인 의견들을 완료됨으로 표시했고 하나의 인라인 코멘트를 완료되지 않음으로 표시했습니다.',
                        '%s가 %s 인라인 의견들을 완료됨으로 표시했고 %s개의 인라인 코멘트를 완료되지 않음으로 표시했습니다.',
                    ),
                ),
            ),

            '%s marked %s inline comment(s) as done.' => array(
                array(
                    '%s가 인라인 의견을 완료됨으로 표시했습니다.',
                    '%s가 %s개의 인라인 의견들을 완료됨으로 표시했습니다.',
                ),
            ),

            '%s marked %s inline comment(s) as not done.' => array(
                array(
                    '%s가 인라인 의견을 완료되지 않음으로 표시했습니다.',
                    '%s가 %s개의 인라인 의견들을 완료되지 않음으로 표시했습니다.',
                ),
            ),

            'These %s object(s) will be destroyed forever:' => array(
                '이 객체는 영구히 파괴됩니다.:',
                '이 객체는 영구히 파괴됩니다.:',
            ),

            'Are you absolutely certain you want to destroy these %s '.
            'object(s)?' => array(
                '이 객체를 파괴하려는 것이 확실합니까?',
                '이 객체를 파괴하려는 것이 확실합니까?',
            ),

            '%s added %s owner(s): %s.' => array(
                array(
                    '%s가 %3$s를 오너로 추가하였습니다.',
                    '%s가 %3$s를 오너로 추가하였습니다.',
                ),
            ),

            '%s removed %s owner(s): %s.' => array(
                array(
                    '%s가 %3$s를 오너에서 제외했습니다.',
                    '%s가 %3$s를 오너에서 제외했습니다.',
                ),
            ),

            '%s changed %s package owner(s), added %s: %s; removed %s: %s.' => array(
                '%s가 패키지 오너를 변경하였습니다. 추가됨 : %4$s; 제외됨 : %6$s.',
            ),

            'Found %s book(s).' => array(
                '%s 책 찾음.',
                '%s 책들을 찾음.',
            ),
            'Found %s file(s) in project.' => array(
                '프로젝트에서 %s 파일을 검색',
                '프로젝트에서 %s 파일을 검색',
            ),
            'Found %s unatomized, uncached file(s).' => array(
                '%s unatomized, uncached 파일 검색됨.',
                '%s unatomized, uncached 파일들 검색됨.',
            ),
            'Found %s file(s) to atomize.' => array(
                '%s atomize할 파일 검색됨.',
                '%s atomize할 파일들 검색됨.',
            ),
            'Atomizing %s file(s).' => array(
                '%s 파일 atomizing.',
                '%s 파일들 atomizing.',
            ),
            'Creating %s document(s).' => array(
                '문서 %s개를 만들고 있습니다.',
                '문서 %s개를 만들고 있습니다.',
            ),
            'Deleting %s document(s).' => array(
                '문서 %s개를 지우고 있습니다.',
                '문서 %s개를 지우고 있습니다.',
            ),
            'Found %s obsolete atom(s) in graph.' => array(
                '%s 그래프에서 오래된 원자 검색됨',
                '%s 그래프에서 오래된 원자들 검색됨',
            ),
            'Found %s new atom(s) in graph.' => array(
                '%s 그래프에서 새로운 원자 검색됨',
                '%s 그래프에서 새로운 원자 검색됨',
            ),
            'This call takes %s parameter(s), but only %s are documented.' => array(
                array(
                    '이 호출은 %s 개의 파라미터가 필요하지만, %s 개만 문서화 돠었습니다.',
                    '이 호출은 %s 개의 파라미터가 필요하지만, %s 개만 문서화 돠었습니다.',
                ),
                array(
                    '이 호출은 %s 개의 파라미터가 필요하지만, %s 개만 문서화 돠었습니다.',
                    '이 호출은 %s 개의 파라미터가 필요하지만, %s 개만 문서화 돠었습니다.',
                ),
            ),

            '%s Passed Test(s)' => '%s 통과함',
            '%s Failed Test(s)' => '%s 실패함',
            '%s Skipped Test(s)' => '%s 생략됨',
            '%s Broken Test(s)' => '%s 망가짐',
            '%s Unsound Test(s)' => '%s 반응 없음',
            '%s Other Test(s)' => '%s Other',

            '%s Bulk Task(s)' => array(
                '%s 작업',
                '%s 작업들',
            ),
            '%s added %s badge(s) for %s: %s.' => array(
                array(
                    '%s가 배지 %3$s를 %s에게 추가했습니다.',
                    '%s가 배지 %3$s를 %s에게 추가했습니다.',
                ),
            ),
            '%s added %s badge(s): %s.' => array(
                array(
                    '%s가 배지 %3$s를 추가하였습니다.',
                    '%s가 배지 %3$s를 추가하였습니다.',
                ),
            ),
            '%s awarded %s recipient(s) for %s: %s.' => array(
                array(
                    '%s가 %3$s를 %4$s에게 수여했습니다.',
                    '%s가 %3$s를 이들에게 수여했습니다 : %4$s.',
                ),
            ),
            '%s awarded %s recipients(s): %s.' => array(
                array(
                    '%s가 %3$s를 주었습니다.',
                    '%s가 %3$s를 주었습니다.',
                ),
            ),
            '%s edited badge(s) for %s, added %s: %s; revoked %s: %s.' => array(
                array(
                    '%s가 %s의 배지를 수정하였습니다, %s 추가 : %s; %s 취소 : %s.',
                    '%s가 %s의 배지를 수정하였습니다, %s 추가 : %s; %s 취소 : %s.',
                ),
            ),
            '%s edited badge(s), added %s: %s; revoked %s: %s.' => array(
                array(
                    '%s가 배지를 수정하였습니다, %s 추가 : %s; %s 취소 : %s.',
                    '%s가 배지를 수정하였습니다, %s 추가 : %s; %s 취소 : %s.',
                ),
            ),
            '%s edited recipient(s) for %s, awarded %s: %s; revoked %s: %s.' => array(
                array(
                    '%s가 %s의 recipient를 수정했습니다, %s 수여 : %s; %s 취소 : %s.',
                    '%s가 %s의 recipient를 수정했습니다, %s 수여 : %s; %s 취소 : %s.',
                ),
            ),
            '%s edited recipient(s), awarded %s: %s; revoked %s: %s.' => array(
                array(
                    '%s가 recipient를 수정했습니다, %s 수여 : %s; %s 취소 : %s.',
                    '%s가 recipient를 수정했습니다, %s 수여 : %s; %s 취소 : %s.',
                ),
            ),
            '%s revoked %s badge(s) for %s: %s.' => array(
                array(
                    '%s가 %3$s의 배지를 취소했습니다 : %4$s.',
                    '%s가 %3$s의 배지들을 취소했습니다 : %4$s.',
                ),
            ),
            '%s revoked %s badge(s): %s.' => array(
                array(
                    '%s가 배지를 취소했습니다 : %3$s.',
                    '%s가 배지들을 취소했습니다: %3$s.',
                ),
            ),
            '%s revoked %s recipient(s) for %s: %s.' => array(
                array(
                    '%s가 %3$s의 recipient를 취소했습니다: %4$s.',
                    '%s가 %3$s의 recipient들을 취소했습니다: %4$s.',
                ),
            ),

            '%s revoked %s recipients(s): %s.' => array(
                array(
                    '%s가 recipient를 취소했습니다: %3$s.',
                    '%s가 여러 recipient를 취소했습니다: %3$s.',
                ),
            ),
            'Search' => '검색',
            'Review Code' => '코드 리뷰',
            'Tasks and Bugs' => '작업과 버그',
            'Cancel' => '취소',
            'Advanced Search' => '고급 검색',
            'No search results.' => '검색 결과가 없습니다.',
            'Send' => '보내기',
            'Partial' => '일부',
            'Partial Upload' => '일부만 업로드',
            'Submit' => '입력',
            'Create Task' => '작업 만들기',
            'Create' => '만들기',
            'Host and Browse Repositories' => '저장소',
            'Okay' => 'OK​',
            'Save Preferences' => '설정 저장',
            'Edit Query' => '쿼리 고치기',
            'Hide Query' => '쿼리 숨기기',
            'Execute Query' => '쿼리 실행',
            'Wiki' => '위키',
            'Get Organized' => 'Get Organized',
            'Explore More Applications' => '더 많은 앱을 보기',
            'Prototype' => '프로토타입',
            'Continue' => '계속',
            'Countdown to Events' => '이벤트 카운트다운',
        );
    }

}
