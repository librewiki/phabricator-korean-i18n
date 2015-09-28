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

            '%s ERROR(S)' => array('에러', '에러들'),
            '%d Error(s)' => array('%d 에러', '%d 에러들'),
            '%d Warning(s)' => array('%d 오류', '%d 오류들'),
            '%d Auto-Fix(es)' => array('%d Auto-Fix', '%d Auto-Fixes'),
            '%d Advice(s)' => array('%d 조언', '%d 개의 조언'),
            '%d Detail(s)' => array('%d 상세', '%d 상세'),

            '(%d line(s))' => array('(%d 줄)', '(%d 줄)'),

            '%d line(s)' => array('%d 줄', '%d 줄'),
            '%d path(s)' => array('%d path', '%d paths'),
            '%d diff(s)' => array('%d diff', '%d diffs'),

            '%s DIFF LINK(S)' => array('DIFF LINK', 'DIFF LINKS'),
            'You successfully created %d diff(s).' => array(
                'You successfully created %d diff.',
                'You successfully created %d diffs.',
            ),
            'Diff creation failed; see body for %s error(s).' => array(
                'Diff creation failed; see body for error.',
                'Diff creation failed; see body for errors.',
            ),

            'There are %d raw fact(s) in storage.' => array(
                'There is %d raw fact in storage.',
                'There are %d raw facts in storage.',
            ),

            'There are %d aggregate fact(s) in storage.' => array(
                'There is %d aggregate fact in storage.',
                'There are %d aggregate facts in storage.',
            ),

            '%d Commit(s) Awaiting Audit' => array(
                '%d Commit Awaiting Audit',
                '%d Commits Awaiting Audit',
            ),

            '%d Problem Commit(s)' => array(
                '%d Problem Commit',
                '%d Problem Commits',
            ),

            '%d Review(s) Blocking Others' => array(
                '%d Review Blocking Others',
                '%d Reviews Blocking Others',
            ),

            '%d Review(s) Need Attention' => array(
                '%d Review Needs Attention',
                '%d Reviews Need Attention',
            ),

            '%d Review(s) Waiting on Others' => array(
                '%d Review Waiting on Others',
                '%d Reviews Waiting on Others',
            ),

            '%d Active Review(s)' => array(
                '%d Active Review',
                '%d Active Reviews',
            ),

            '%d Flagged Object(s)' => array(
                '%d Flagged Object',
                '%d Flagged Objects',
            ),

            '%d Object(s) Tracked' => array(
                '%d Object Tracked',
                '%d Objects Tracked',
            ),

            '%d Assigned Task(s)' => array(
                '%d 할당된 태스크',
                '%d 할당된 태스크들',
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
                '이것은 바이너리 파일입니다. 크기는 I%s byte 입니다.',
                '이것은 바이러니 파일입니다. 크기는 %s bytes 입니다..',
            ),

            '%d Action(s) Have No Effect' => array(
                '작업은 효과가 없었습니다.',
                '작업들은 효과가 없었습니다.',
            ),

            '%d Action(s) With No Effect' => array(
                '아무효과가 없는 작업',
                '아무효과가 없는 작업들',
            ),

            'Some of your %d action(s) have no effect:' => array(
                '당신의 작업중 하나가 효과가 없었습니다.:',
                '당신의 작업중 일부가 효과가 없었습니다.:',
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
                '당신이 할려고 하는 작업들은 효과가 없습니다.:',
                '당신이 할려고 하는 작업들은 효과가 없습니다.:',
            ),

            '%s edited member(s), added %d: %s; removed %d: %s.' =>
                '%s edited members, added: %3$s; removed: %5$s.',

            '%s added %s member(s): %s.' => array(
                array(
                    '%s가 멤버로 추가했습니다.: %3$s.',
                    '%s가 멤버로 추가했습니다.: %3$s.',
                ),
            ),

            '%s removed %s member(s): %s.' => array(
                array(
                    '%s가 맴버를 삭제했습니다.: %3$s.',
                    '%s가 맴버를 삭제했습니다.: %3$s.',
                ),
            ),

            '%s edited project(s), added %s: %s; removed %s: %s.' =>
                '%s edited projects, added: %3$s; removed: %5$s.',

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
                    '%s가 태스크를 병합했습니다.: %3$s.',
                    '%s가 태스크들을 병합했습니다.: %3$s.',
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
                    '%s가 태스크를 차단중입니다.: %3$s.',
                    '%s가 태스크들을 차단중입니다.: %3$s.',
                ),
            ),

            '%s added %s blocked task(s): %s.' => array(
                array(
                    '%s가 태스크를 차단했습니다.: %3$s.',
                    '%s가 태스크들을 차단했습니다.: %3$s.',
                ),
            ),

            '%s removed %s blocking task(s): %s.' => array(
                array(
                    '%s가 차단중인 태스크를 삭제했습니다.: %3$s.',
                    '%s가 차단중인 태스크들을 삭제했습니다.: %3$s.',
                ),
            ),

            '%s removed %s blocked task(s): %s.' => array(
                array(
                    '%s가 차단된 태스크를 삭제했습니다.: %3$s.',
                    '%s가 차단된 태스크들을 삭제했습니다.: %3$s.',
                ),
            ),

            '%s added %s blocking task(s) for %s: %s.' => array(
                array(
                    '%s가 %3$s을(를) 위해 태스크들을 차단중입니다.: %4$s.',
                    '%s가 %3$s을(를) 위해 태스크들을 차단중입니다.: %4$s.',
                ),
            ),

            '%s added %s blocked task(s) for %s: %s.' => array(
                array(
                    '%s가 %3$s을(를) 위해 태스크를 차단했습니다.: %4$s.',
                    '%s가 %3$s을(를) 위하 태스크를 차단했습니다.: %4$s.',
                ),
            ),

            '%s removed %s blocking task(s) for %s: %s.' => array(
                array(
                    '%s가 %3$s을(를) 위해 차단중인 태스크를 삭제했습니다.: %4$s.',
                    '%s가 %3$s을(를) 위해 차단중인 태스크를 삭제했습니다.: %4$s.',
                ),
            ),

            '%s removed %s blocked task(s) for %s: %s.' => array(
                array(
                    '%s가 %3$s을(를) 위해 차단된 태스크를 삭제했습니다.: %4$s.',
                    '%s가 %3$s을(를) 위해 차단된 태스크들을 삭제했습니다.: %4$s.',
                ),
            ),

            '%s edited blocking task(s), added %s: %s; removed %s: %s.' =>
                '%s가 차단중인 태스크를 수정했습니다. 추가됨: %3$s; 삭제됨: %5$s.',

            '%s edited blocking task(s) for %s, added %s: %s; removed %s: %s.' =>
                '%s가 %s을(를) 위해 차단중인 태스크를 수정했습니다. 추가됨: %4$s; 삭제됨: %6$s.',

            '%s edited blocked task(s), added %s: %s; removed %s: %s.' =>
                '%s가 차단된 태스크를 수정했습니다. 추가됨: %3$s; 삭제됨: %5$s.',

            '%s edited blocked task(s) for %s, added %s: %s; removed %s: %s.' =>
                '%s가 %s을(를) 위해 차단된 태스크를 수정했습니다. 추가됨: %4$s; 삭제됨: %6$s.',

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
                    '%s added a question: %3$s.',
                    '%s added questions: %3$s.',
                ),
            ),

            '%s removed %s question(s): %s.' => array(
                array(
                    '%s removed a question: %3$s.',
                    '%s removed questions: %3$s.',
                ),
            ),

            '%s edited mock(s), added %s: %s; removed %s: %s.' =>
                '%s edited mocks, added: %3$s; removed: %5$s.',

            '%s added %s mock(s): %s.' => array(
                array(
                    '%s added a mock: %3$s.',
                    '%s added mocks: %3$s.',
                ),
            ),

            '%s removed %s mock(s): %s.' => array(
                array(
                    '%s removed a mock: %3$s.',
                    '%s removed mocks: %3$s.',
                ),
            ),

            '%s added %s task(s): %s.' => array(
                array(
                    '%s added a task: %3$s.',
                    '%s added tasks: %3$s.',
                ),
            ),

            '%s removed %s task(s): %s.' => array(
                array(
                    '%s removed a task: %3$s.',
                    '%s removed tasks: %3$s.',
                ),
            ),

            '%s edited file(s), added %s: %s; removed %s: %s.' =>
                '%s edited files, added: %3$s; removed: %5$s.',

            '%s added %s file(s): %s.' => array(
                array(
                    '%s added a file: %3$s.',
                    '%s added files: %3$s.',
                ),
            ),

            '%s removed %s file(s): %s.' => array(
                array(
                    '%s removed a file: %3$s.',
                    '%s removed files: %3$s.',
                ),
            ),

            '%s edited contributor(s), added %s: %s; removed %s: %s.' =>
                '%s edited contributors, added: %3$s; removed: %5$s.',

            '%s added %s contributor(s): %s.' => array(
                array(
                    '%s added a contributor: %3$s.',
                    '%s added contributors: %3$s.',
                ),
            ),

            '%s removed %s contributor(s): %s.' => array(
                array(
                    '%s removed a contributor: %3$s.',
                    '%s removed contributors: %3$s.',
                ),
            ),

            '%s edited %s reviewer(s), added %s: %s; removed %s: %s.' =>
                '%s edited reviewers, added: %4$s; removed: %6$s.',

            '%s edited %s reviewer(s) for %s, added %s: %s; removed %s: %s.' =>
                '%s edited reviewers for %3$s, added: %5$s; removed: %7$s.',

            '%s added %s reviewer(s): %s.' => array(
                array(
                    '%s added a reviewer: %3$s.',
                    '%s added reviewers: %3$s.',
                ),
            ),

            '%s removed %s reviewer(s): %s.' => array(
                array(
                    '%s removed a reviewer: %3$s.',
                    '%s removed reviewers: %3$s.',
                ),
            ),

            '%d other(s)' => array(
                '1 other',
                '%d others',
            ),

            '%s edited subscriber(s), added %d: %s; removed %d: %s.' =>
                '%s edited subscribers, added: %3$s; removed: %5$s.',

            '%s added %d subscriber(s): %s.' => array(
                array(
                    '%s added a subscriber: %3$s.',
                    '%s added subscribers: %3$s.',
                ),
            ),

            '%s removed %d subscriber(s): %s.' => array(
                array(
                    '%s removed a subscriber: %3$s.',
                    '%s removed subscribers: %3$s.',
                ),
            ),

            '%s edited watcher(s), added %s: %s; removed %d: %s.' =>
                '%s edited watchers, added: %3$s; removed: %5$s.',

            '%s added %s watcher(s): %s.' => array(
                array(
                    '%s added a watcher: %3$s.',
                    '%s added watchers: %3$s.',
                ),
            ),

            '%s removed %s watcher(s): %s.' => array(
                array(
                    '%s removed a watcher: %3$s.',
                    '%s removed watchers: %3$s.',
                ),
            ),

            '%s edited participant(s), added %d: %s; removed %d: %s.' =>
                '%s edited participants, added: %3$s; removed: %5$s.',

            '%s added %d participant(s): %s.' => array(
                array(
                    '%s added a participant: %3$s.',
                    '%s added participants: %3$s.',
                ),
            ),

            '%s removed %d participant(s): %s.' => array(
                array(
                    '%s removed a participant: %3$s.',
                    '%s removed participants: %3$s.',
                ),
            ),

            '%s edited image(s), added %d: %s; removed %d: %s.' =>
                '%s edited images, added: %3$s; removed: %5$s',

            '%s added %d image(s): %s.' => array(
                array(
                    '%s added an image: %3$s.',
                    '%s added images: %3$s.',
                ),
            ),

            '%s removed %d image(s): %s.' => array(
                array(
                    '%s removed an image: %3$s.',
                    '%s removed images: %3$s.',
                ),
            ),

            '%s Line(s)' => array(
                '%s Line',
                '%s Lines',
            ),

            'Indexing %d object(s) of type %s.' => array(
                'Indexing %d object of type %s.',
                'Indexing %d object of type %s.',
            ),

            'Run these %d command(s):' => array(
                'Run this command:',
                'Run these commands:',
            ),

            'Install these %d PHP extension(s):' => array(
                'Install this PHP extension:',
                'Install these PHP extensions:',
            ),

            'The current Phabricator configuration has these %d value(s):' => array(
                'The current Phabricator configuration has this value:',
                'The current Phabricator configuration has these values:',
            ),

            'The current MySQL configuration has these %d value(s):' => array(
                'The current MySQL configuration has this value:',
                'The current MySQL configuration has these values:',
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
                '해결되지 않은 설정 이슈가 있습니다...',
                '%d개의 해결되지 않은 설정 이슈들이 있습니다...',
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
                    '%s added a dependency for %3$s: %4$s.',
                    '%s added dependencies for %3$s: %4$s.',
                ),
            ),

            '%s removed %s dependencie(s): %s.' => array(
                array(
                    '%s removed a dependency: %3$s.',
                    '%s removed dependencies: %3$s.',
                ),
            ),

            '%s removed %s dependencie(s) for %s: %s.' => array(
                array(
                    '%s removed a dependency for %3$s: %4$s.',
                    '%s removed dependencies for %3$s: %4$s.',
                ),
            ),

            '%s added %s dependent revision(s): %s.' => array(
                array(
                    '%s added a dependent revision: %3$s.',
                    '%s added dependent revisions: %3$s.',
                ),
            ),

            '%s added %s dependent revision(s) for %s: %s.' => array(
                array(
                    '%s added a dependent revision for %3$s: %4$s.',
                    '%s added dependent revisions for %3$s: %4$s.',
                ),
            ),

            '%s removed %s dependent revision(s): %s.' => array(
                array(
                    '%s removed a dependent revision: %3$s.',
                    '%s removed dependent revisions: %3$s.',
                ),
            ),

            '%s removed %s dependent revision(s) for %s: %s.' => array(
                array(
                    '%s removed a dependent revision for %3$s: %4$s.',
                    '%s removed dependent revisions for %3$s: %4$s.',
                ),
            ),

            '%s added %s commit(s): %s.' => array(
                array(
                    '%s added a commit: %3$s.',
                    '%s added commits: %3$s.',
                ),
            ),

            '%s removed %s commit(s): %s.' => array(
                array(
                    '%s removed a commit: %3$s.',
                    '%s removed commits: %3$s.',
                ),
            ),

            '%s edited commit(s), added %s: %s; removed %s: %s.' =>
                '%s edited commits, added %3$s; removed %5$s.',

            '%s added %s reverted commit(s): %s.' => array(
                array(
                    '%s added a reverted commit: %3$s.',
                    '%s added reverted commits: %3$s.',
                ),
            ),

            '%s removed %s reverted commit(s): %s.' => array(
                array(
                    '%s removed a reverted commit: %3$s.',
                    '%s removed reverted commits: %3$s.',
                ),
            ),

            '%s edited reverted commit(s), added %s: %s; removed %s: %s.' =>
                '%s edited reverted commits, added %3$s; removed %5$s.',

            '%s added %s reverted commit(s) for %s: %s.' => array(
                array(
                    '%s added a reverted commit for %3$s: %4$s.',
                    '%s added reverted commits for %3$s: %4$s.',
                ),
            ),

            '%s removed %s reverted commit(s) for %s: %s.' => array(
                array(
                    '%s removed a reverted commit for %3$s: %4$s.',
                    '%s removed reverted commits for %3$s: %4$s.',
                ),
            ),

            '%s edited reverted commit(s) for %s, added %s: %s; removed %s: %s.' =>
                '%s edited reverted commits for %2$s, added %4$s; removed %6$s.',

            '%s added %s reverting commit(s): %s.' => array(
                array(
                    '%s added a reverting commit: %3$s.',
                    '%s added reverting commits: %3$s.',
                ),
            ),

            '%s removed %s reverting commit(s): %s.' => array(
                array(
                    '%s removed a reverting commit: %3$s.',
                    '%s removed reverting commits: %3$s.',
                ),
            ),

            '%s edited reverting commit(s), added %s: %s; removed %s: %s.' =>
                '%s edited reverting commits, added %3$s; removed %5$s.',

            '%s added %s reverting commit(s) for %s: %s.' => array(
                array(
                    '%s added a reverting commit for %3$s: %4$s.',
                    '%s added reverting commitsi for %3$s: %4$s.',
                ),
            ),

            '%s removed %s reverting commit(s) for %s: %s.' => array(
                array(
                    '%s removed a reverting commit for %3$s: %4$s.',
                    '%s removed reverting commits for %3$s: %4$s.',
                ),
            ),

            '%s edited reverting commit(s) for %s, added %s: %s; removed %s: %s.' =>
                '%s edited reverting commits for %s, added %4$s; removed %6$s.',

            '%s changed project member(s), added %d: %s; removed %d: %s.' =>
                '%s changed project members, added %3$s; removed %5$s.',

            '%s added %d project member(s): %s.' => array(
                array(
                    '%s added a member: %3$s.',
                    '%s added members: %3$s.',
                ),
            ),

            '%s removed %d project member(s): %s.' => array(
                array(
                    '%s removed a member: %3$s.',
                    '%s removed members: %3$s.',
                ),
            ),

            '%d project hashtag(s) are already used: %s.' => array(
                'Project hashtag %2$s is already used.',
                '%d project hashtags are already used: %2$s.',
            ),

            '%s changed project hashtag(s), added %d: %s; removed %d: %s.' =>
                '%s changed project hashtags, added %3$s; removed %5$s.',

            '%s added %d project hashtag(s): %s.' => array(
                array(
                    '%s added a hashtag: %3$s.',
                    '%s added hashtags: %3$s.',
                ),
            ),

            '%s removed %d project hashtag(s): %s.' => array(
                array(
                    '%s removed a hashtag: %3$s.',
                    '%s removed hashtags: %3$s.',
                ),
            ),

            '%s changed %s hashtag(s), added %d: %s; removed %d: %s.' =>
                '%s changed hashtags for %s, added %4$s; removed %6$s.',

            '%s added %d %s hashtag(s): %s.' => array(
                array(
                    '%s added a hashtag to %3$s: %4$s.',
                    '%s added hashtags to %3$s: %4$s.',
                ),
            ),

            '%s removed %d %s hashtag(s): %s.' => array(
                array(
                    '%s removed a hashtag from %3$s: %4$s.',
                    '%s removed hashtags from %3$s: %4$s.',
                ),
            ),

            '%d User(s) Need Approval' => array(
                '%d User Needs Approval',
                '%d Users Need Approval',
            ),

            '%s older changes(s) are hidden.' => array(
                '%d older change is hidden.',
                '%d older changes are hidden.',
            ),

            '%s, %s line(s)' => array(
                '%s, %s line',
                '%s, %s lines',
            ),

            '%s pushed %d commit(s) to %s.' => array(
                array(
                    '%s pushed a commit to %3$s.',
                    '%s pushed %d commits to %s.',
                ),
            ),

            '%s commit(s)' => array(
                '1 commit',
                '%s commits',
            ),

            '%s removed %s JIRA issue(s): %s.' => array(
                array(
                    '%s removed a JIRA issue: %3$s.',
                    '%s removed JIRA issues: %3$s.',
                ),
            ),

            '%s added %s JIRA issue(s): %s.' => array(
                array(
                    '%s added a JIRA issue: %3$s.',
                    '%s added JIRA issues: %3$s.',
                ),
            ),

            '%s added %s required legal document(s): %s.' => array(
                array(
                    '%s added a required legal document: %3$s.',
                    '%s added required legal documents: %3$s.',
                ),
            ),

            '%s updated JIRA issue(s): added %s %s; removed %d %s.' =>
                '%s updated JIRA issues: added %3$s; removed %5$s.',

            '%s edited %s task(s), added %s: %s; removed %s: %s.' =>
                '%s edited tasks, added %4$s; removed %6$s.',

            '%s added %s task(s) to %s: %s.' => array(
                array(
                    '%s added a task to %3$s: %4$s.',
                    '%s added tasks to %3$s: %4$s.',
                ),
            ),

            '%s removed %s task(s) from %s: %s.' => array(
                array(
                    '%s removed a task from %3$s: %4$s.',
                    '%s removed tasks from %3$s: %4$s.',
                ),
            ),

            '%s edited %s task(s) for %s, added %s: %s; removed %s: %s.' =>
                '%s edited tasks for %3$s, added: %5$s; removed %7$s.',

            '%s edited %s commit(s), added %s: %s; removed %s: %s.' =>
                '%s edited commits, added %4$s; removed %6$s.',

            '%s added %s commit(s) to %s: %s.' => array(
                array(
                    '%s added a commit to %3$s: %4$s.',
                    '%s added commits to %3$s: %4$s.',
                ),
            ),

            '%s removed %s commit(s) from %s: %s.' => array(
                array(
                    '%s removed a commit from %3$s: %4$s.',
                    '%s removed commits from %3$s: %4$s.',
                ),
            ),

            '%s edited %s commit(s) for %s, added %s: %s; removed %s: %s.' =>
                '%s edited commits for %3$s, added: %5$s; removed %7$s.',

            '%s added %s revision(s): %s.' => array(
                array(
                    '%s added a revision: %3$s.',
                    '%s added revisions: %3$s.',
                ),
            ),

            '%s removed %s revision(s): %s.' => array(
                array(
                    '%s removed a revision: %3$s.',
                    '%s removed revisions: %3$s.',
                ),
            ),

            '%s edited %s revision(s), added %s: %s; removed %s: %s.' =>
                '%s edited revisions, added %4$s; removed %6$s.',

            '%s added %s revision(s) to %s: %s.' => array(
                array(
                    '%s added a revision to %3$s: %4$s.',
                    '%s added revisions to %3$s: %4$s.',
                ),
            ),

            '%s removed %s revision(s) from %s: %s.' => array(
                array(
                    '%s removed a revision from %3$s: %4$s.',
                    '%s removed revisions from %3$s: %4$s.',
                ),
            ),

            '%s edited %s revision(s) for %s, added %s: %s; removed %s: %s.' =>
                '%s edited revisions for %3$s, added: %5$s; removed %7$s.',

            '%s edited %s project(s), added %s: %s; removed %s: %s.' =>
                '%s edited projects, added %4$s; removed %6$s.',

            '%s added %s project(s) to %s: %s.' => array(
                array(
                    '%s added a project to %3$s: %4$s.',
                    '%s added projects to %3$s: %4$s.',
                ),
            ),

            '%s removed %s project(s) from %s: %s.' => array(
                array(
                    '%s removed a project from %3$s: %4$s.',
                    '%s removed projects from %3$s: %4$s.',
                ),
            ),

            '%s edited %s project(s) for %s, added %s: %s; removed %s: %s.' =>
                '%s edited projects for %3$s, added: %5$s; removed %7$s.',

            '%s added %s panel(s): %s.' => array(
                array(
                    '%s added a panel: %3$s.',
                    '%s added panels: %3$s.',
                ),
            ),

            '%s removed %s panel(s): %s.' => array(
                array(
                    '%s removed a panel: %3$s.',
                    '%s removed panels: %3$s.',
                ),
            ),

            '%s edited %s panel(s), added %s: %s; removed %s: %s.' =>
                '%s edited panels, added %4$s; removed %6$s.',

            '%s added %s dashboard(s): %s.' => array(
                array(
                    '%s added a dashboard: %3$s.',
                    '%s added dashboards: %3$s.',
                ),
            ),

            '%s removed %s dashboard(s): %s.' => array(
                array(
                    '%s removed a dashboard: %3$s.',
                    '%s removed dashboards: %3$s.',
                ),
            ),

            '%s edited %s dashboard(s), added %s: %s; removed %s: %s.' =>
                '%s edited dashboards, added %4$s; removed %6$s.',

            '%s added %s edge(s): %s.' => array(
                array(
                    '%s added an edge: %3$s.',
                    '%s added edges: %3$s.',
                ),
            ),

            '%s added %s edge(s) to %s: %s.' => array(
                array(
                    '%s added an edge to %3$s: %4$s.',
                    '%s added edges to %3$s: %4$s.',
                ),
            ),

            '%s removed %s edge(s): %s.' => array(
                array(
                    '%s removed an edge: %3$s.',
                    '%s removed edges: %3$s.',
                ),
            ),

            '%s removed %s edge(s) from %s: %s.' => array(
                array(
                    '%s removed an edge from %3$s: %4$s.',
                    '%s removed edges from %3$s: %4$s.',
                ),
            ),

            '%s edited edge(s), added %s: %s; removed %s: %s.' =>
                '%s edited edges, added: %3$s; removed: %5$s.',

            '%s edited %s edge(s) for %s, added %s: %s; removed %s: %s.' =>
                '%s edited edges for %3$s, added: %5$s; removed %7$s.',

            '%s added %s member(s) for %s: %s.' => array(
                array(
                    '%s added a member for %3$s: %4$s.',
                    '%s added members for %3$s: %4$s.',
                ),
            ),

            '%s removed %s member(s) for %s: %s.' => array(
                array(
                    '%s removed a member for %3$s: %4$s.',
                    '%s removed members for %3$s: %4$s.',
                ),
            ),

            '%s edited %s member(s) for %s, added %s: %s; removed %s: %s.' =>
                '%s edited members for %3$s, added: %5$s; removed %7$s.',

            '%d related link(s):' => array(
                'Related link:',
                'Related links:',
            ),

            'You have %d unpaid invoice(s).' => array(
                'You have an unpaid invoice.',
                'You have unpaid invoices.',
            ),

            'The configurations differ in the following %s way(s):' => array(
                'The configurations differ:',
                'The configurations differ in these ways:',
            ),

            'Phabricator is configured with an email domain whitelist (in %s), so '.
            'only users with a verified email address at one of these %s '.
            'allowed domain(s) will be able to register an account: %s' => array(
                array(
                    'Phabricator is configured with an email domain whitelist (in %s), '.
                    'so only users with a verified email address at %3$s will be '.
                    'allowed to register an account.',
                    'Phabricator is configured with an email domain whitelist (in %s), '.
                    'so only users with a verified email address at one of these '.
                    'allowed domains will be able to register an account: %3$s',
                ),
            ),

            'Show First %d Line(s)' => array(
                'Show First Line',
                'Show First %d Lines',
            ),

            "\xE2\x96\xB2 Show %d Line(s)" => array(
                "\xE2\x96\xB2 Show Line",
                "\xE2\x96\xB2 Show %d Lines",
            ),

            'Show All %d Line(s)' => array(
                'Show Line',
                'Show All %d Lines',
            ),

            "\xE2\x96\xBC Show %d Line(s)" => array(
                "\xE2\x96\xBC Show Line",
                "\xE2\x96\xBC Show %d Lines",
            ),

            'Show Last %d Line(s)' => array(
                'Show Last Line',
                'Show Last %d Lines',
            ),

            '%s marked %s inline comment(s) as done and %s inline comment(s) as '.
            'not done.' => array(
                array(
                    array(
                        '%s marked an inline comment as done and an inline comment '.
                        'as not done.',
                        '%s marked an inline comment as done and %3$s inline comments '.
                        'as not done.',
                    ),
                    array(
                        '%s marked %s inline comments as done and an inline comment '.
                        'as not done.',
                        '%s marked %s inline comments as done and %s inline comments '.
                        'as done.',
                    ),
                ),
            ),

            '%s marked %s inline comment(s) as done.' => array(
                array(
                    '%s marked an inline comment as done.',
                    '%s marked %s inline comments as done.',
                ),
            ),

            '%s marked %s inline comment(s) as not done.' => array(
                array(
                    '%s marked an inline comment as not done.',
                    '%s marked %s inline comments as not done.',
                ),
            ),

            'These %s object(s) will be destroyed forever:' => array(
                'This object will be destroyed forever:',
                'These objects will be destroyed forever:',
            ),

            'Are you absolutely certain you want to destroy these %s '.
            'object(s)?' => array(
                'Are you absolutely certain you want to destroy this object?',
                'Are you absolutely certain you want to destroy these objects?',
            ),

            '%s added %s owner(s): %s.' => array(
                array(
                    '%s added an owner: %3$s.',
                    '%s added owners: %3$s.',
                ),
            ),

            '%s removed %s owner(s): %s.' => array(
                array(
                    '%s removed an owner: %3$s.',
                    '%s removed owners: %3$s.',
                ),
            ),

            '%s changed %s package owner(s), added %s: %s; removed %s: %s.' => array(
                '%s changed package owners, added: %4$s; removed: %6$s.',
            ),

            'Found %s book(s).' => array(
                'Found %s book.',
                'Found %s books.',
            ),
            'Found %s file(s) in project.' => array(
                'Found %s file in project.',
                'Found %s files in project.',
            ),
            'Found %s unatomized, uncached file(s).' => array(
                'Found %s unatomized, uncached file.',
                'Found %s unatomized, uncached files.',
            ),
            'Found %s file(s) to atomize.' => array(
                'Found %s file to atomize.',
                'Found %s files to atomize.',
            ),
            'Atomizing %s file(s).' => array(
                'Atomizing %s file.',
                'Atomizing %s files.',
            ),
            'Creating %s document(s).' => array(
                'Creating %s document.',
                'Creating %s documents.',
            ),
            'Deleting %s document(s).' => array(
                'Deleting %s document.',
                'Deleting %s documents.',
            ),
            'Found %s obsolete atom(s) in graph.' => array(
                'Found %s obsolete atom in graph.',
                'Found %s obsolete atoms in graph.',
            ),
            'Found %s new atom(s) in graph.' => array(
                'Found %s new atom in graph.',
                'Found %s new atoms in graph.',
            ),
            'This call takes %s parameter(s), but only %s are documented.' => array(
                array(
                    'This call takes %s parameter, but only %s is documented.',
                    'This call takes %s parameter, but only %s are documented.',
                ),
                array(
                    'This call takes %s parameters, but only %s is documented.',
                    'This call takes %s parameters, but only %s are documented.',
                ),
            ),

            '%s Passed Test(s)' => '%s Passed',
            '%s Failed Test(s)' => '%s Failed',
            '%s Skipped Test(s)' => '%s Skipped',
            '%s Broken Test(s)' => '%s Broken',
            '%s Unsound Test(s)' => '%s Unsound',
            '%s Other Test(s)' => '%s Other',

            '%s Bulk Task(s)' => array(
                '%s Task',
                '%s Tasks',
            ),
            '%s added %s badge(s) for %s: %s.' => array(
                array(
                    '%s added a badge for %s: %3$s.',
                    '%s added badges for %s: %3$s.',
                ),
            ),
            '%s added %s badge(s): %s.' => array(
                array(
                    '%s added a badge: %3$s.',
                    '%s added badges: %3$s.',
                ),
            ),
            '%s awarded %s recipient(s) for %s: %s.' => array(
                array(
                    '%s awarded %3$s to %4$s.',
                    '%s awarded %3$s to multiple recipients: %4$s.',
                ),
            ),
            '%s awarded %s recipients(s): %s.' => array(
                array(
                    '%s awarded a recipient: %3$s.',
                    '%s awarded multiple recipients: %3$s.',
                ),
            ),
            '%s edited badge(s) for %s, added %s: %s; revoked %s: %s.' => array(
                array(
                    '%s edited badges for %s, added %s: %s; revoked %s: %s.',
                    '%s edited badges for %s, added %s: %s; revoked %s: %s.',
                ),
            ),
            '%s edited badge(s), added %s: %s; revoked %s: %s.' => array(
                array(
                    '%s edited badges, added %s: %s; revoked %s: %s.',
                    '%s edited badges, added %s: %s; revoked %s: %s.',
                ),
            ),
            '%s edited recipient(s) for %s, awarded %s: %s; revoked %s: %s.' => array(
                array(
                    '%s edited recipients for %s, awarded %s: %s; revoked %s: %s.',
                    '%s edited recipients for %s, awarded %s: %s; revoked %s: %s.',
                ),
            ),
            '%s edited recipient(s), awarded %s: %s; revoked %s: %s.' => array(
                array(
                    '%s edited recipients, awarded %s: %s; revoked %s: %s.',
                    '%s edited recipients, awarded %s: %s; revoked %s: %s.',
                ),
            ),
            '%s revoked %s badge(s) for %s: %s.' => array(
                array(
                    '%s revoked a badge for %3$s: %4$s.',
                    '%s revoked multiple badges for %3$s: %4$s.',
                ),
            ),
            '%s revoked %s badge(s): %s.' => array(
                array(
                    '%s revoked a badge: %3$s.',
                    '%s revoked multiple badges: %3$s.',
                ),
            ),
            '%s revoked %s recipient(s) for %s: %s.' => array(
                array(
                    '%s revoked %3$s from %4$s.',
                    '%s revoked multiple recipients for %3$s: %4$s.',
                ),
            ),

            '%s revoked %s recipients(s): %s.' => array(
                array(
                    '%s revoked a recipient: %3$s.',
                    '%s revoked multiple recipients: %3$s.',
                ),
            ),

        );
    }

}
