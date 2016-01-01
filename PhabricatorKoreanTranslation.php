<?php

final class PhabricatorKoreanTranslation
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ko_KR';
  }

  protected function getTranslations() {
    return array(
      'No daemon(s) with id(s) "%s" exist!' => array(
        'id가 %s인 데몬이 존재하지 않습니다',
        'id가 %s인 데몬이 존재하지 않습니다',
      ),
      'These %d configuration value(s) are related:' => array(
        '이 설정값은 다음과 관계있습니다:',
        '이 설정값은 다음과 관계있습니다:',
      ),
      '%s Task(s)' => array('작업', '작업들'),

      '%s ERROR(S)' => array('오류', '오류들'),
      '%d Error(s)' => array('%d 오류', '%d 오류'),
      '%d Warning(s)' => array('%d 경고', '%d 경고'),
      '%d Auto-Fix(es)' => array('%d 자동처리', '%d 자동처리'),
      '%d Advice(s)' => array('%d 조언', '%d 개의 조언'),
      '%d Detail(s)' => array('%d 상세', '%d 상세'),

      '(%d line(s))' => array('(%d 줄)', '(%d 줄)'),

      '%d line(s)' => array('%d 줄', '%d 줄'),
      '%d path(s)' => array('%d 위치', '%d 위치'),
      '%d diff(s)' => array('%d 차이', '%d 차이'),

      '%s Answer(s)' => array('%s 답변', '%s 답변'),
      'Show %d Comment(s)' => array('%d개의 의견 보기', '%d개의 의견 보기'),

      '%s DIFF LINK(S)' => array('DIFF LINK', 'DIFF LINKS'),
      'You successfully created %d diff(s).' => array(
        '성공적으로 차이 %d개를 만들었습니다.',
        '성공적으로 차이 %d개를 만들었습니다.',
      ),
      'Diff creation failed; see body for %s error(s).' => array(
        '차이를 만드는 데 실패했습니다. 에러를 확인하세요.',
        '차이를 만드는 데 실패했습니다. 에러를 확인하세요.',
      ),

      'There are %d raw fact(s) in storage.' => array(
        '스토리지에 가공되지 않은 정보가 %d개 있습니다.',
        '스토리지에 가공되지 않은 정보가 %d개 있습니다.',
      ),

      'There are %d aggregate fact(s) in storage.' => array(
        'There is %d aggregate fact in storage.',
        'There are %d aggregate facts in storage.',
      ),

      '%s Commit(s) Awaiting Audit' => array(
        '%s개의 커밋이 검토를 기다리고 있습니다.',
        '%s개의 커밋이 검토를 기다리고 있습니다.',
      ),

      '%s Problem Commit(s)' => array(
        '문제 있는 커밋 %s개',
        '문제 있는 커밋 %s개',
      ),

      '%s Review(s) Blocking Others' => array(
        '리뷰 %s개로 인해 다른 사람의 작업이 가로막혔습니다.',
        '리뷰 %s개로 인해 다른 사람의 작업이 가로막혔습니다.',
      ),

      '%s Review(s) Need Attention' => array(
        '리뷰 %s개에 관심이 필요합니다.',
        '리뷰 %s개에 관심이 필요합니다.',
      ),

      '%s Review(s) Waiting on Others' => array(
        '다른 사람의 리뷰 %s개를 기다리고 있습니다.',
        '다른 사람의 리뷰 %s개를 기다리고 있습니다.',
      ),

      '%s Active Review(s)' => array(
        '활성화된 리뷰 %s개',
        '활성화된 리뷰 %s개',
      ),

      '%s Flagged Object(s)' => array(
        '관심 객체 %s개',
        '관심 객체 %s개',
      ),

      '%s Object(s) Tracked' => array(
        '객체 %s개 추적됨',
        '객체 %s개 추적됨',
      ),

      '%s Assigned Task(s)' => array(
        '할당된 작업 %s개',
        '할당된 작업 %s개',
      ),

      'Show %d Lint Message(s)' => array(
        '린트 메시지 %d개 보이기',
        '린트 메시지 %d개 보이기',
      ),
      'Hide %d Lint Message(s)' => array(
        '린트 메시지 %d개 숨기기',
        '린트 메시지 %d개 숨기기',
      ),

      'This is a binary file. It is %s byte(s) in length.' => array(
        '이것은 바이너리 파일입니다. 크기는 %s byte 입니다.',
        '이것은 바이너리 파일입니다. 크기는 %s bytes 입니다.',
      ),

      '%s Action(s) Have No Effect' => array(
        '행위는 효과가 없습니다.',
        '행위는 효과가 없습니다.',
      ),

      '%s Action(s) With No Effect' => array(
        '아무 효과가 없는 행위',
        '아무 효과가 없는 행위',
      ),

      'Some of your %s action(s) have no effect:' => array(
        '당신의 행위 중 하나가 효과가 없었습니다:',
        '당신의 행위 중 일부가 효과가 없었습니다:',
      ),

      'Apply remaining %d action(s)?' => array(
        '남아있는 행위를 적용할까요?',
        '남아있는 행위를 적용할까요?',
      ),

      'Apply %d Other Action(s)' => array(
        '남아있는 행위를 적용했습니다.',
        '남아있는 행위를 적용했습니다.',
      ),

      'The %s action(s) you are taking have no effect:' => array(
        '당신이 하려는 행위는 효과가 없습니다:',
        '당신이 하려는 행위는 효과가 없습니다:',
      ),

      '%s edited member(s), added %d: %s; removed %d: %s.' =>
        '%s 님이 구성원 목록을 편집했습니다. 추가됨: %3$s; 제거됨: %5$s.',

      '%s added %s member(s): %s.' => array(
        array(
          '%s 님이 구성원으로 추가했습니다: %3$s.',
          '%s 님이 구성원으로 추가했습니다: %3$s.',
        ),
      ),

      '%s removed %s member(s): %s.' => array(
        array(
          '%s 님이 구성원을 삭제했습니다: %3$s.',
          '%s 님이 구성원을 삭제했습니다: %3$s.',
        ),
      ),

      '%s edited project(s), added %s: %s; removed %s: %s.' =>
        '%s 님이 프로젝트를 편집했습니다. 추가됨: %3$s; 삭제됨: %5$s.',

      '%s added %s project(s): %s.' => array(
        array(
          '%s 님이 프로젝트를 추가했습니다: %3$s.',
          '%s 님이 프로젝트를 추가했습니다: %3$s.',
        ),
      ),

      '%s removed %s project(s): %s.' => array(
        array(
          '%s 님이 프로젝트를 삭제했습니다: %3$s.',
          '%s 님이 프로젝트를 삭제했습니다: %3$s.',
        ),
      ),

      '%s merged %s task(s): %s.' => array(
        array(
          '%s 님이 작업을 병합했습니다: %3$s.',
          '%s 님이 작업을 병합했습니다: %3$s.',
        ),
      ),

      '%s merged %s task(s) %s into %s.' => array(
        array(
          '%s 님이 %3$s을(를) %4$s(으)로 병합했습니다.',
          '%s 님이 %3$s을(를) %4$s(으)로 병합했습니다.',
        ),
      ),

      '%s added %s voting user(s): %s.' => array(
        array(
          '%s 님이 투표 사용자를 추가했습니다: %3$s.',
          '%s 님이 투표 사용자를 추가했습니다: %3$s.',
        ),
      ),

      '%s removed %s voting user(s): %s.' => array(
        array(
          '%s 님이 투표 사용자를 삭제했습니다: %3$s.',
          '%s 님이 투표 사용자를 삭제했습니다: %3$s.',
        ),
      ),

      '%s added %s blocking task(s): %s.' => array(
        array(
          '%s 님이 선행 작업으로 추가했습니다: %3$s.',
          '%s 님이 선행 작업으로 추가했습니다: %3$s.',
        ),
      ),

      '%s added %s blocked task(s): %s.' => array(
        array(
          '%s 님이 후행 작업으로 추가했습니다: %3$s.',
          '%s 님이 후행 작업으로 추가했습니다: %3$s.',
        ),
      ),

      '%s removed %s blocking task(s): %s.' => array(
        array(
          '선행으로 설정한 작업을 %s 님이 취소했습니다: %3$s.',
          '선행으로 설정한 작업을 %s 님이 취소했습니다: %3$s.',
        ),
      ),

      '%s removed %s blocked task(s): %s.' => array(
        array(
          '후행으로 설정한 작업을 %s 님이 취소했습니다: %3$s.',
          '후행으로 설정한 작업을 %s 님이 취소했습니다: %3$s.',
        ),
      ),

      '%s added %s blocking task(s) for %s: %s.' => array(
        array(
          '%s 님이 "%3$s"의 선행 작업으로 추가했습니다: %4$s.',
          '%s 님이 "%3$s"의 선행 작업으로 추가했습니다: %4$s.',
        ),
      ),

      '%s added %s blocked task(s) for %s: %s.' => array(
        array(
          '%s 님이 "%3$s"의 후행 작업으로 추가했습니다: %4$s.',
          '%s 님이 "%3$s"의 후행 작업으로 추가했습니다: %4$s.',
        ),
      ),

      '%s removed %s blocking task(s) for %s: %s.' => array(
        array(
          '%s 님이 "%3$s"의 선행 작업을 취소했습니다: %4$s.',
          '%s 님이 "%3$s"의 선행 작업을 취소했습니다: %4$s.',
        ),
      ),

      '%s removed %s blocked task(s) for %s: %s.' => array(
        array(
          '%s 님이 "%3$s"의 후행 작업을 취소했습니다: %4$s.',
          '%s 님이 "%3$s"의 후행 작업을 취소했습니다: %4$s.',
        ),
      ),

      '%s edited blocking task(s), added %s: %s; removed %s: %s.' =>
        '%s 님이 선행 작업 목록을 수정하였습니다. 추가됨: %3$s; 삭제됨: %5$s.',

      '%s edited blocking task(s) for %s, added %s: %s; removed %s: %s.' =>
        '%s 님이 "%s"의 선행 작업 목록을 수정하였습니다. 추가됨: %4$s; 삭제됨: %6$s.',

      '%s edited blocked task(s), added %s: %s; removed %s: %s.' =>
        '%s 님이 후행 작업 목록을 수정하였습니다. 추가됨: %3$s; 삭제됨: %5$s.',

      '%s edited blocked task(s) for %s, added %s: %s; removed %s: %s.' =>
        '%s 님이 "%s"의 후행 작업 목록을 수정하였습니다. 추가됨: %4$s; 삭제됨: %6$s.',

      '%s edited answer(s), added %s: %s; removed %d: %s.' =>
        '%s 님이 답변을 수정했습니다. 추가됨: %3$s; 삭제됨: %5$s.',

      '%s added %s answer(s): %s.' => array(
        array(
          '%s 님이 답변을 추가했습니다: %3$s.',
          '%s 님이 답변을 추가했습니다: %3$s.',
        ),
      ),

      '%s removed %s answer(s): %s.' => array(
        array(
          '%s 님이 답변을 삭제했습니다: %3$s.',
          '%s 님이 답변을 삭제했습니다: %3$s.',
        ),
      ),

     '%s edited question(s), added %s: %s; removed %s: %s.' =>
        '%s 님이 질문을 수정했습니다. 추가됨: %3$s; 삭제됨: %5$s.',

      '%s added %s question(s): %s.' => array(
        array(
          '%s 님이 질문을 추가했습니다: %3$s.',
          '%s 님이 질문을 추가했습니다: %3$s.',
        ),
      ),

      '%s removed %s question(s): %s.' => array(
        array(
          '%s 님이 질문을 삭제했습니다: %3$s.',
          '%s 님이 질문을 삭제했습니다: %3$s.',
        ),
      ),

      '%s edited mock(s), added %s: %s; removed %s: %s.' =>
        '%s 님이 모의실험을 편집했습니다. 추가됨: %3$s; 삭제됨: %5$s.',

      '%s added %s mock(s): %s.' => array(
        array(
          '%s 님이 모의실험을 추가했습니다: %3$s.',
          '%s 님이 모의실험을 추가했습니다: %3$s.',
        ),
      ),

      '%s removed %s mock(s): %s.' => array(
        array(
          '%s 님이 모의실험을 삭제했습니다: %3$s.',
          '%s 님이 모의실험을 삭제했습니다: %3$s.',
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
          '%s 님이 작업을 삭제했습니다: %3$s.',
        ),
      ),

      '%s edited file(s), added %s: %s; removed %s: %s.' =>
        '%s 님이 파일을 바꾸었습니다. 추가됨: %3$s; 삭제됨: %5$s.',

      '%s added %s file(s): %s.' => array(
        array(
          '%s 님이 파일을 추가했습니다: %3$s.',
          '%s 님이 파일을 추가했습니다: %3$s.',
        ),
      ),

      '%s removed %s file(s): %s.' => array(
        array(
          '%s 님이 파일을 삭제했습니다: %3$s.',
          '%s 님이 파일을 삭제했습니다: %3$s.',
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
        '%s 님이 검토자 목록을 수정했습니다. 추가됨: %4$s; 삭제됨: %6$s.',

      '%s edited %s reviewer(s) for %s, added %s: %s; removed %s: %s.' =>
        '%s 님이 "%3$s"의 검토자 목록을 수정했습니다. 추가됨: %5$s; 삭제됨: %7$s.',

      '%s added %s reviewer(s): %s.' => array(
        array(
          '%s 님이 검토자를 추가했습니다: %3$s.',
          '%s 님이 검토자를 추가했습니다: %3$s.',
        ),
      ),

      '%s added %s reviewer(s) for %s: %s.' => array(
        array(
          '%s 님이 "%3$s"의 검토자를 추가했습니다: %4$s.',
          '%s 님이 "%3$s"의 검토자를 추가했습니다: %4$s.',
        ),
      ),

      '%s removed %s reviewer(s): %s.' => array(
        array(
          '%s 님이 검토자를 제거했습니다: %3$s.',
          '%s 님이 검토자를 제거했습니다: %3$s.',
        ),
      ),

      '%s removed %s reviewer(s) for %s: %s.' => array(
        array(
          '%s 님이 "%3$s"의 검토자를 제거했습니다: %4$s.',
          '%s 님이 "%3$s"의 검토자를 제거했습니다: %4$s.',
        ),
      ),

      '%d other(s)' => array(
        '외 1명',
        '외 %d명',
      ),

      '%s edited subscriber(s), added %d: %s; removed %d: %s.' =>
        '%s 님이 구독자 목록을 수정했습니다. 추가됨: %3$s; 제거됨: %5$s.',

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
        '다음 명령어를 실행하세요:',
      ),

      'Install these %d PHP extension(s):' => array(
        '다음 PHP 확장 기능을 설치하세요:',
        '다음 PHP 확장 기능을 설치하세요:',
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
        'PHP에서 이 설정 파일도 불러왔습니다:',
        'PHP에서 이 설정 파일들도 불러왔습니다:',
      ),

      'You have %d unresolved setup issue(s)...' => array(
        '풀리지 않은 설정 이슈가 있습니다...',
        '%d개의 풀리지 않은 설정 이슈가 있습니다...',
      ),

      '%s added %d inline comment(s).' => array(
        array(
          '%s 님이 인라인 의견을 추가했습니다.',
          '%s 님이 인라인 의견 %d개를 추가했습니다.',
        ),
      ),

      '%s comment(s)' => array('의견 %s개', '의견 %s개'),
      '%s rejection(s)' => array('거부 %s개', '거부 %s개'),
      '%s update(s)' => array('수정사항 %s개', '수정사항 %s개'),

      'This configuration value is defined in these %d '.
      'configuration source(s): %s.' => array(
        '이 구성 값은 이 구성 소스에서 정의되있습니다 :'.
        '%2$s.',
        '이 구성 값은 이 %d개의 구성 소스들에서 정의되있습니다. '.
        ' : %s.',
      ),

      '%s Open Pull Request(s)' => array(
        '열린 풀 리퀘스트 %s개',
        '열린 풀 리퀘스트 %s개',
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
        '커밋 %s개',
        '커밋 %s개',
      ),

      '%s attached %d file(s): %s.' => array(
        array(
          '%s 님이 파일을 첨부했습니다: %3$s.',
          '%s 님이 파일을 첨부했습니다: %3$s.',
        ),
      ),

      '%s detached %d file(s): %s.' => array(
        array(
          '%s 님이 첨부파일을 내렸습니다: %3$s.',
          '%s 님이 첨부파일을 내렸습니다: %3$s.',
        ),
      ),

      '%s changed file(s), attached %d: %s; detached %d: %s.' =>
        '%s 님이 파일을 변경했습니다. 첨부됨: %3$s; 내려감: %5$s.',


      '%s added %s dependencie(s): %s.' => array(
        array(
          '%s 님이 의존성을 추가했습니다: %3$s.',
          '%s 님이 의존성을 추가했습니다: %3$s.',
        ),
      ),

      '%s added %s dependencie(s) for %s: %s.' => array(
        array(
          '%s 님이 "%3$s"에 의존성을 추가했습니다: %4$s.',
          '%s 님이 "%3$s"에 의존성을 추가했습니다: %4$s.',
        ),
      ),

      '%s removed %s dependencie(s): %s.' => array(
        array(
          '%s 님이 의존성을 제거했습니다: %3$s.',
          '%s 님이 의존성을 제거했습니다: %3$s.',
        ),
      ),

      '%s removed %s dependencie(s) for %s: %s.' => array(
        array(
          '%s 님이 "%3$s"에서 의존성을 제거했습니다: %4$s.',
          '%s 님이 "%3$s"에서 의존성을 제거했습니다: %4$s.',
        ),
      ),

      '%s edited dependencie(s), added %s: %s; removed %s: %s.' => array(
        '%s 님이 의존성을 수정했습니다. 추가됨: %3$s; 삭제됨: %5$s.',
      ),

      '%s edited dependencie(s) for %s, added %s: %s; removed %s: %s.' => array(
        '%s 님이 "%s"의 의존성을 수정했습니다. 추가됨: %3$s; 삭제됨: %5$s.',
      ),

      '%s added %s dependent revision(s): %s.' => array(
        array(
          '%s 님이 의존하는 리비전을 추가했습니다: %3$s.',
          '%s 님이 의존하는 리비전을 추가했습니다: %3$s.',
        ),
      ),

      '%s added %s dependent revision(s) for %s: %s.' => array(
        array(
          '%s 님이 "%3$s"에 의존하는 리비전을 추가했습니다: %4$s.',
          '%s 님이 "%3$s"에 의존하는 리비전을 추가했습니다: %4$s.',
        ),
      ),

      '%s removed %s dependent revision(s): %s.' => array(
        array(
          '%s 님이 의존하는 리비전을 제거했습니다: %3$s.',
          '%s 님이 의존하는 리비전을 제거했습니다: %3$s.',
        ),
      ),

      '%s removed %s dependent revision(s) for %s: %s.' => array(
        array(
          '%s 님이 "%3$s"에서 의존하는 리비전을 제거했습니다: %4$s.',
          '%s 님이 "%3$s"에서 의존하는 리비전을 제거했습니다: %4$s.',
        ),
      ),

      '%s added %s commit(s): %s.' => array(
        array(
          '%s 님이 커밋을 추가했습니다: %3$s.',
          '%s 님이 커밋을 추가했습니다: %3$s.',
        ),
      ),

      '%s removed %s commit(s): %s.' => array(
        array(
          '%s 님이 커밋을 제거했습니다: %3$s.',
          '%s 님이 커밋을 제거했습니다: %3$s.',
        ),
      ),

      '%s edited commit(s), added %s: %s; removed %s: %s.' =>
        '%s 님이 커밋을 편집했습니다. 추가됨: %3$s, 제거됨: %5$s.',

      '%s added %s reverted commit(s): %s.' => array(
        array(
          '%s 님이 되돌리는 커밋을 추가했습니다: %3$s.',
          '%s 님이 되돌리는 커밋을 추가했습니다: %3$s.',
        ),
      ),

      '%s removed %s reverted commit(s): %s.' => array(
        array(
          '%s 님이 되돌리는 커밋을 제거했습니다: %3$s.',
          '%s 님이 되돌리는 커밋을 제거했습니다: %3$s.',
        ),
      ),

      '%s edited reverted commit(s), added %s: %s; removed %s: %s.' =>
        '%s 님이 되돌리는 커밋들을 편집했습니다. 추가됨: %3$s; 제거됨: %5$s',

      '%s added %s reverted commit(s) for %s: %s.' => array(
        array(
          '%s 님이 "%3$s"에 되돌리는 커밋을 추가했습니다: %4$s.',
          '%s 님이 "%3$s"에 되돌리는 커밋을 추가했습니다: %4$s.',
        ),
      ),

      '%s removed %s reverted commit(s) for %s: %s.' => array(
        array(
          '%s 님이 "%3$s"에서 되돌리는 커밋을 제거했습니다: %4$s.',
          '%s 님이 "%3$s"에서 되돌리는 커밋을 제거했습니다: %4$s.',
        ),
      ),

      '%s edited reverted commit(s) for %s, added %s: %s; removed %s: %s.' =>
        '%s 님이 "%2$s"의 되돌리는 커밋을 편집했습니다. 추가됨: %4$s;  제거됨: %6$s.',

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
          '%s 님이 "%3$s"에 되돌리는 커밋을 추가했습니다: %4$s.',
          '%s 님이 "%3$s"에 되돌리는 커밋을 추가했습니다: %4$s.',
        ),
      ),

      '%s removed %s reverting commit(s) for %s: %s.' => array(
        array(
          '%s 님이 "%3$s"에서 되돌리는 커밋을 삭제했습니다: %4$s.',
          '%s 님이 "%3$s"에서 되돌리는 커밋을 삭제했습니다: %4$s.',
        ),
      ),

      '%s edited reverting commit(s) for %s, added %s: %s; removed %s: %s.' =>
        '%s 님이 "%s"의 되돌리는 커밋을 수정했습니다. 추가됨: %4$s; 삭제됨: %6$s.',

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
          '%s 님이 프로젝트 구성원을 제거했습니다: %3$s.',
          '%s 님이 프로젝트 구성원을 제거했습니다: %3$s.',
        ),
      ),

      '%s project hashtag(s) are already used by other projects: %s.' => array(
        '프로젝트 해시태그 %2$s 는 이미 사용 중입니다.',
        '%d개의 프로젝트 해시태그가 이미 사용 중입니다: %2$s.',
      ),

      '%s changed project hashtag(s), added %d: %s; removed %d: %s.' =>
        '%s 님이 프로젝트 해시태그를 바꾸었습니다. 추가됨: %3$s; 삭제됨: %5$s.',

      'Hashtags must contain at least one letter or number. %s '.
      'project hashtag(s) are invalid: %s.' => array(
        '해시태그는 최소 1자 이상의 글자 또는 숫자가 필요합니다.'.
        '%2$s 는 유효하지 않습니다.',
        '해시태그는 최소 1자 이상의 글자 또는 숫자가 필요합니다.'.
        '유효하지 않은 해시태그: %2$s.',
      ),

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
        '%s 님이 "%s"의 해시태그를 바꾸었습니다. 추가됨: %4$s, 삭제됨: %6$s.',

      '%s added %d %s hashtag(s): %s.' => array(
        array(
          '%s 님이 "%3$s"에 해시태그를 추가했습니다: %4$s.',
          '%s 님이 "%3$s"에 해시태그를 추가했습니다: %4$s.',
        ),
      ),

      '%s removed %d %s hashtag(s): %s.' => array(
        array(
          '%s 님이 "%3$s"에서 해시태그를 제거했습니다: %4$s.',
          '%s 님이 "%3$s"에서 해시태그를 제거했습니다: %4$s.',
        ),
      ),

      '%d User(s) Need Approval' => array(
        '%d 명의 사용자가 승인을 요청했습니다',
        '%d 명의 사용자가 승인을 요청했습니다',
      ),

      '%s, %s line(s)' => array(
        array(
          '%s, %s 줄',
          '%s, %s 줄',
        ),
      ),

      '%s pushed %d commit(s) to %s.' => array(
        array(
          '%s 님이 "%3$s"에 커밋을 푸시했습니다.',
          '%s 님이 "%s"에 %d개의 커밋을 푸시했습니다.',
        ),
      ),

      '%s commit(s)' => array(
        '커밋 1개',
        '커밋 %s개',
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
          '%s 님이 "%3$s"에 작업을 추가했습니다: %4$s.',
          '%s 님이 "%3$s"에 작업을 추가했습니다: %4$s.',
        ),
      ),

      '%s removed %s task(s) from %s: %s.' => array(
        array(
          '%s 님이 "%3$s"에서 작업을 제거했습니다: %4$s.',
          '%s 님이 "%3$s"에서 작업을 제거했습니다: %4$s.',
        ),
      ),

      '%s edited %s task(s) for %s, added %s: %s; removed %s: %s.' =>
        '%s 님이 "%3$s"의 작업을 수정했습니다. 추가됨: %5$s; 삭제됨: %7$s.',

      '%s edited %s commit(s), added %s: %s; removed %s: %s.' =>
        '%s 님이 커밋을 수정했습니다. 추가됨: %4$s; 삭제됨: %6$s.',

      '%s added %s commit(s) to %s: %s.' => array(
        array(
          '%s 님이 "%3$s"에 커밋을 추가했습니다: %4$s.',
          '%s 님이 "%3$s"에 커밋을 추가했습니다: %4$s.',
        ),
      ),

      '%s removed %s commit(s) from %s: %s.' => array(
        array(
          '%s 님이 "%3$s"에서 커밋을 삭제했습니다: %4$s.',
          '%s 님이 "%3$s"에서 커밋을 삭제했습니다: %4$s.',
        ),
      ),

      '%s edited %s commit(s) for %s, added %s: %s; removed %s: %s.' =>
        '%s 님이 "%3$s"의 커밋을 수정했습니다. 추가됨: %5$s, 삭제됨: %7$s.',

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
          '%s 님이 "%3$s"에 리비전을 추가했습니다: %4$s.',
          '%s 님이 "%3$s"에 리비전을 추가했습니다: %4$s.',
        ),
      ),

      '%s removed %s revision(s) from %s: %s.' => array(
        array(
          '%s 님이 "%3$s"에서 리비전을 제거했습니다: %4$s.',
          '%s 님이 "%3$s"에서 리비전을 제거했습니다: %4$s.',
        ),
      ),

      '%s edited %s revision(s) for %s, added %s: %s; removed %s: %s.' =>
        '%s 님이 "%3$s"의 리비전을 편집했습니다. 추가됨: %5$s; 삭제됨: %7$s.',

      '%s edited %s project(s), added %s: %s; removed %s: %s.' =>
        '%s 님이 프로젝트를 편집했습니다. 추가됨: %4$s; 삭제됨: %6$s.',

      '%s added %s project(s) to %s: %s.' => array(
        array(
          '%s 님이 "%3$s"에 프로젝트를 추가했습니다: %4$s.',
          '%s 님이 "%3$s"에 프로젝트를 추가했습니다: %4$s.',
        ),
      ),

      '%s removed %s project(s) from %s: %s.' => array(
        array(
          '%s 님이 "%3$s"에서 프로젝트를 제거했습니다: %4$s.',
          '%s 님이 "%3$s"에서 프로젝트를 제거했습니다: %4$s.',
        ),
      ),

      '%s edited %s project(s) for %s, added %s: %s; removed %s: %s.' =>
        '%s 님이 "%3$s"에서 프로젝트를 편집했습니다, 추가됨: %5$s; 제거됨: %7$s.',

      '%s added %s panel(s): %s.' => array(
        array(
          '%s 님이 패널을 추가했습니다: %3$s.',
          '%s 님이 패널을 추가했습니다: %3$s.',
        ),
      ),

      '%s removed %s panel(s): %s.' => array(
        array(
          '%s 님이 패널을 제거했습니다: %3$s.',
          '%s 님이 패널을 제거했습니다: %3$s.',
        ),
      ),

      '%s edited %s panel(s), added %s: %s; removed %s: %s.' =>
        '%s 님이 패널을 수정했습니다. 추가됨: %4$s; 제거됨: %6$s.',

      '%s added %s dashboard(s): %s.' => array(
        array(
          '%s 님이 대시보드를 추가했습니다: %3$s.',
          '%s 님이 대시보드를 추가했습니다: %3$s.',
        ),
      ),

      '%s removed %s dashboard(s): %s.' => array(
        array(
          '%s 님이 대시보드를 제거했습니다: %3$s.',
          '%s 님이 대시보드를 제거했습니다: %3$s.',
        ),
      ),

      '%s edited %s dashboard(s), added %s: %s; removed %s: %s.' =>
        '%s 님이 대시보드를 편집했습니다. 추가됨: %4$s, 제거됨: %6$s.',

      '%s added %s edge(s): %s.' => array(
        array(
          '%s 님이 엣지를 추가했습니다: %3$s.',
          '%s 님이 엣지를 추가했습니다: %3$s.',
        ),
      ),

      '%s added %s edge(s) to %s: %s.' => array(
        array(
          '%s 님이 "%3$s"에 엣지를 추가했습니다: %4$s.',
          '%s 님이 "%3$s"에 엣지를 추가했습니다: %4$s.',
        ),
      ),

      '%s removed %s edge(s): %s.' => array(
        array(
          '%s 님이 엣지를 제거했습니다: %3$s.',
          '%s 님이 엣지를 제거했습니다: %3$s.',
        ),
      ),

      '%s removed %s edge(s) from %s: %s.' => array(
        array(
          '%s 님이 "%3$s"에서 엣지를 제거했습니다: %4$s.',
          '%s 님이 "%3$s"에서 엣지를 제거했습니다: %4$s.',
        ),
      ),

      '%s edited edge(s), added %s: %s; removed %s: %s.' =>
        '%s 님이 엣지들을 편집했습니다. 추가됨: %3$s, 제거됨: %5$s.',

      '%s edited %s edge(s) for %s, added %s: %s; removed %s: %s.' =>
        '%s 님이 "%3$s"에서 엣지들을 편집했습니다. 추가됨: %5$s, 제거됨: %7$s.',

      '%s added %s member(s) for %s: %s.' => array(
        array(
          '%s 님이 "%3$s"에 구성원을 추가했습니다: %4$s.',
          '%s 님이 "%3$s"에 구성원을 추가했습니다: %4$s.',
        ),
      ),

      '%s removed %s member(s) for %s: %s.' => array(
        array(
          '%s 님이 "%3$s"에서 구성원을 제외했습니다: %4$s.',
          '%s 님이 "%3$s"에서 구성원을 제외했습니다: %4$s.',
        ),
      ),

      '%s edited %s member(s) for %s, added %s: %s; removed %s: %s.' =>
        '%s 님이 "%3$s"의 구성원 명단을 수정했습니다. 추가됨: %5$s, 제외됨: %7$s.',

      '%d related link(s):' => array(
        '관련 링크:',
        '관련 링크:',
      ),

      'You have %d unpaid invoice(s).' => array(
        '미납된 요금이 있습니다.',
        '미납된 요금이 있습니다.',
      ),

      'The configurations differ in the following %s way(s):' => array(
        '구성이 다릅니다:',
        '구성이 다릅니다:',
      ),

      'Phabricator is configured with an email domain whitelist (in %s), so '.
      'only users with a verified email address at one of these %s '.
      'allowed domain(s) will be able to register an account: %s' => array(
        array(
          '이메일 도메인 화이트리스트가 %s에 구성이 되어'.
          '있어, %3$s에서 확인된 이메일 주소만이'.
          '계정을 만들 수 있습니다.',
          '이메일 도메인 화이트리스트가 %s에 구성이 되어 , '.
          '있어, 허용된 도메인 중 확인된 이메일 주소만이'.
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
            '%s 님이 하나의 인라인 의견을 완료됨으로 표시했고 하나의 인라인 의견을 '.
            '완료되지 않음으로 표시했습니다.',
            '%s 님이 하나의 인라인 의견을 완료됨으로 표시했고 %3$s개의 인라인 의견을 '.
            '완료되지 않음으로 표시했습니다.',
          ),
          array(
            '%s 님이 %s개의 인라인 의견을 완료됨으로 표시했고 하나의 인라인 의견을 '.
            '완료되지 않음으로 표시했습니다.',
            '%s 님이 %s개의 인라인 의견을 완료됨으로 표시했고 %s개의 인라인 의견을 '.
            '완료되지 않음으로 표시했습니다.',
          ),
        ),
      ),

      '%s marked %s inline comment(s) as done.' => array(
        array(
          '%s 님이 인라인 의견을 완료됨으로 표시했습니다.',
          '%s 님이 %s개의 인라인 의견을 완료됨으로 표시했습니다.',
        ),
      ),

      '%s marked %s inline comment(s) as not done.' => array(
        array(
          '%s 님이 인라인 의견을 완료되지 않음으로 표시했습니다.',
          '%s 님이 %s개의 인라인 의견을 완료되지 않음으로 표시했습니다.',
        ),
      ),

      'These %s object(s) will be destroyed forever:' => array(
        '이 객체는 영구히 파괴됩니다:',
        '이 객체는 영구히 파괴됩니다:',
      ),

      'Are you absolutely certain you want to destroy these %s '.
      'object(s)?' => array(
        '이 객체를 파괴하려는 것이 확실합니까?',
        '이 객체를 파괴하려는 것이 확실합니까?',
      ),

      '%s added %s owner(s): %s.' => array(
        array(
          '%s 님이 오너로 추가하였습니다: %3$s.',
          '%s 님이 오너로 추가하였습니다: %3$s.',
        ),
      ),

      '%s removed %s owner(s): %s.' => array(
        array(
          '%s님이 오너에서 제외하였습니다: %3$s.',
          '%s님이 오너에서 제외하였습니다: %3$s.',
        ),
      ),

      '%s changed %s package owner(s), added %s: %s; removed %s: %s.' => array(
        '%s 님이 패키지 오너를 변경하였습니다. 추가됨 : %4$s; 제외됨 : %6$s.',
      ),

      'Found %s book(s).' => array(
        '%s권의 책 찾음.',
        '%s권의 책 찾음.',
      ),
      'Found %s file(s)...' => array(
        '%s개의 파일 찾음...',
        '%s개의 파일 찾음...',
      ),
      'Found %s file(s) in project.' => array(
        '프로젝트에서 %s개의 파일을 찾음.',
        '프로젝트에서 %s개의 파일을 찾음.',
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
        '문서 %s개 생성중.',
        '문서 %s개 생성중.',
      ),
      'Deleting %s document(s).' => array(
        '문서 %s개 삭제중',
        '문서 %s개 삭제중',
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
          '이 요청은 %s개의 매개변수가 필요하지만, %s개만 문서화 되었습니다.',
          '이 요청은 %s개의 매개변수가 필요하지만, %s개만 문서화 되었습니다.',
        ),
        array(
          '이 요청은 %s개의 매개변수가 필요하지만, %s개만 문서화 되었습니다.',
          '이 요청은 %s개의 매개변수가 필요하지만, %s개만 문서화 되었습니다.',
        ),
      ),

      '%s Passed Test(s)' => '%s 통과함',
      '%s Failed Test(s)' => '%s 실패함',
      '%s Skipped Test(s)' => '%s 생략됨',
      '%s Broken Test(s)' => '%s 망가짐',
      '%s Unsound Test(s)' => '%s 반응 없음',
      '%s Other Test(s)' => '%s 기타',

      '%s Bulk Task(s)' => array(
        '%s개의 작업',
        '%s개의 작업',
      ),

      '%s added %s badge(s) for %s: %s.' => array(
        array(
          '%s 님이 배지 "%3$s"를 %s에게 추가했습니다.',
          '%s 님이 배지 "%3$s"를 %s에게 추가했습니다.',
        ),
      ),
      '%s added %s badge(s): %s.' => array(
        array(
          '%s 님이 배지 "%3$s"를 추가하였습니다.',
          '%s 님이 배지 "%3$s"를 추가하였습니다.',
        ),
      ),
      '%s awarded %s recipient(s) for %s: %s.' => array(
        array(
          '%s 님이 "%3$s"를 %4$s에게 수여했습니다.',
          '%s 님이 "%3$s"를 이들에게 수여했습니다 : %4$s.',
        ),
      ),
      '%s awarded %s recipients(s): %s.' => array(
        array(
          '%s 님이 "%3$s"를 수여했습니다.',
          '%s 님이 "%3$s"를 수여했습니다.',
        ),
      ),
      '%s edited badge(s) for %s, added %s: %s; revoked %s: %s.' => array(
        array(
          '%s 님이 %s의 배지를 수정했습니다, %s 추가 : %s; %s 취소 : %s.',
          '%s 님이 %s의 배지를 수정했습니다, %s 추가 : %s; %s 취소 : %s.',
        ),
      ),
      '%s edited badge(s), added %s: %s; revoked %s: %s.' => array(
        array(
          '%s 님이 배지를 수정했습니다, %s 추가 : %s; %s 취소 : %s.',
          '%s 님이 배지를 수정했습니다, %s 추가 : %s; %s 취소 : %s.',
        ),
      ),
      '%s edited recipient(s) for %s, awarded %s: %s; revoked %s: %s.' => array(
        array(
          '%s 님이 "%s"의 수여자를 수정했습니다, %s 수여 : %s; %s 회수 : %s.',
          '%s 님이 "%s"의 수여자를 수정했습니다, %s 수여 : %s; %s 회수 : %s.',
        ),
      ),
      '%s edited recipient(s), awarded %s: %s; revoked %s: %s.' => array(
        array(
          '%s 님이 수여자를 수정했습니다, %s 수여 : %s; %s 취소 : %s.',
          '%s 님이 수여자를 수정했습니다, %s 수여 : %s; %s 취소 : %s.',
        ),
      ),
      '%s revoked %s badge(s) for %s: %s.' => array(
        array(
          '%s 님이 %3$s의 배지를 취소했습니다 : %4$s.',
          '%s 님이 %3$s의 배지를 취소했습니다 : %4$s.',
        ),
      ),
      '%s revoked %s badge(s): %s.' => array(
        array(
          '%s 님이 배지를 취소했습니다 : %3$s.',
          '%s 님이 배지를 취소했습니다 : %3$s.',
        ),
      ),
      '%s revoked %s recipient(s) for %s: %s.' => array(
        array(
          '%s 님이 %3$s의 수여자를 취소했습니다: %4$s.',
          '%s 님이 %3$s의 수여자를 취소했습니다: %4$s.',
        ),
      ),

      '%s revoked %s recipients(s): %s.' => array(
        array(
          '%s 님이 수여자를 취소했습니다: %3$s.',
          '%s 님이 수여자를 취소했습니다: %3$s.',
        ),
      ),

      '%s automatically subscribed target(s) were not affected: %s.' => array(
        '자동 구독이 적용되지 않았습니다: %2$s.',
        '자동 구독이 적용되지 않았습니다: %2$s.',
      ),

      'Declined to resubscribe %s target(s) because they previously '.
      'unsubscribed: %s.' => array(
        '이미 대상이 구독을 취소하였기 때문에 재구독이 거절되었습니다'.
        ': %2$s.',
        '이미 대상이 구독을 취소하였기 때문에 재구독이 거절되었습니다'.
        ': %2$s.',
      ),

      '%s target(s) are not subscribed: %s.' => array(
        '구독 중이 아닙니다: %2$s.',
        '구독 중이 아닙니다: %2$s.',
      ),

      '%s target(s) are already subscribed: %s.' => array(
        '이미 구독 중입니다: %2$s.',
        '이미 구독 중입니다: %2$s.',
      ),

      'Added %s subscriber(s): %s.' => array(
        '구독자 추가됨: %2$s.',
        '구독자 추가됨: %2$s.',
      ),

      'Removed %s subscriber(s): %s.' => array(
        '구독자 제외됨: %2$s.',
        '구독자 제외됨: %2$s.',
      ),

      'Queued email to be delivered to %s target(s): %s.' => array(
        'Queued email to be delivered to target: %2$s.',
        'Queued email to be delivered to targets: %2$s.',
      ),

      'Queued email to be delivered to %s target(s), ignoring their '.
      'notification preferences: %s.' => array(
        'Queued email to be delivered to target, ignoring notification '.
        'preferences: %2$s.',
        'Queued email to be delivered to targets, ignoring notification '.
        'preferences: %2$s.',
      ),

      '%s project(s) are not associated: %s.' => array(
        '프로젝트가 연관되어 있지 않습니다: %2$s.',
        '프로젝트가 연관되어 있지 않습니다: %2$s.',
      ),

      '%s project(s) are already associated: %s.' => array(
        '프로젝트가 연관되어 있습니다: %2$s.',
        '프로젝트가 연관되어 있습니다: %2$s.',
      ),

      'Added %s project(s): %s.' => array(
        '프로젝트 추가됨: %2$s.',
        '프로젝트 추가됨: %2$s.',
      ),

      'Removed %s project(s): %s.' => array(
        '프로젝트 제거됨: %2$s.',
        '프로젝트 제거됨: %2$s.',
      ),

      'Added %s reviewer(s): %s.' => array(
        '검토자 추가됨: %2$s.',
        '검토자 추가됨: %2$s.',
      ),

      'Added %s blocking reviewer(s): %s.' => array(
        '차단된 검토자 추가됨: %2$s.',
        '차단된 검토자 추가됨: %2$s.',
      ),

      'Required %s signature(s): %s.' => array(
        '서명이 필요함: %2$s.',
        '서명이 필요함: %2$s.',
      ),

      'Started %s build(s): %s.' => array(
        'Started a build: %2$s.',
        'Started builds: %2$s.',
      ),

      'Added %s auditor(s): %s.' => array(
        'Added an auditor: %2$s.',
        'Added auditors: %2$s.',
      ),

      '%s target(s) do not have permission to see this object: %s.' => array(
        '해당 객체에 대해 접근권한이 없습니다: %2$s.',
        '해당 객체에 대해 접근권한이 없습니다: %2$s.',
      ),

      'This action has no effect on %s target(s): %s.' => array(
        '이 행위가 무효합니다: %2$s.',
        '이 행위가 무효합니다: %2$s.',
      ),

      'Mail sent in the last %s day(s).' => array(
        '어제 메일을 보냈습니다.',
        '%s일 전에 메일을 보냈습니다.',
      ),

      '%s Day(s)' => array(
        '%s일',
        '%s일',
      ),
      '%s Day(s) Ago' => array(
        '%s일 전',
        '%s일 전',
      ),

      'Setting retention policy for "%s" to %s day(s).' => array(
        'Setting retention policy for "%s" to one day.',
        'Setting retention policy for "%s" to %s days.',
      ),

      'Waiting %s second(s) for lease to activate.' => array(
        'Waiting a second for lease to activate.',
        'Waiting %s seconds for lease to activate.',
      ),

      '%s changed %s automation blueprint(s), added %s: %s; removed %s: %s.' =>
        '%s changed automation blueprints, added: %4$s; removed: %6$s.',

      '%s added %s automation blueprint(s): %s.' => array(
        array(
          '%s added an automation blueprint: %3$s.',
          '%s added automation blueprints: %3$s.',
        ),
      ),

      '%s removed %s automation blueprint(s): %s.' => array(
        array(
          '%s removed an automation blueprint: %3$s.',
          '%s removed automation blueprints: %3$s.',
        ),
      ),

      'WARNING: There are %s unapproved authorization(s)!' => array(
        '경고: 승인되지 않았습니다!',
        '경고: 승인되지 않았습니다!',
      ),

      'Found %s Open Resource(s)' => array(
        'Found %s Open Resource',
        'Found %s Open Resources',
      ),

      '%s Open Resource(s) Remain' => array(
        '%s Open Resource Remain',
        '%s Open Resources Remain',
      ),

      'Found %s Blueprint(s)' => array(
        'Found %s Blueprint',
        'Found %s Blueprints',
      ),

      '%s Blueprint(s) Can Allocate' => array(
        '%s Blueprint Can Allocate',
        '%s Blueprints Can Allocate',
      ),

      '%s Blueprint(s) Enabled' => array(
        '%s Blueprint Enabled',
        '%s Blueprints Enabled',
      ),

      '%s Event(s)' => array(
        '%s개의 이벤트',
        '%s개의 이벤트',
      ),

      '%s Unit(s)' => array(
        '%s Unit',
        '%s Units',
      ),

      'QUEUEING TASKS (%s Commit(s)):' => array(
        'QUEUEING TASKS (%s Commit):',
        'QUEUEING TASKS (%s Commits):',
      ),

      'Found %s total commit(s); updating...' => array(
        '총 %s개의 커밋을 찾았습니다; 갱신 중...',
        '총 %s개의 커밋을 찾았습니다; 갱신 중...',
      ),

      'Not enough process slots to schedule the other %s '.
      'repository(s) for updates yet.' => array(
        'Not enough process slots to schedule the other '.'
        repository for update yet.',
        'Not enough process slots to schedule the other %s '.
        'repositories for updates yet.',
      ),


      '%s updated %s, added %d: %s.' =>
        '%s 님이 %s를 갱신함, 추가됨: %4$s.',

      '%s updated %s, removed %s: %s.' =>
        '%s 님이 %s를 갱신함, 삭제됨: %4$s.',

      '%s updated %s, added %s: %s; removed %s: %s.' =>
        '%s 님이 %s를 갱신함, 추가됨: %4$s; 삭제됨: %6$s.',

      '%s updated %s for %s, added %d: %s.' =>
        '%s 님이 %s를 "%s"의 사유로 갱신함, 추가됨: %5$s.',

      '%s updated %s for %s, removed %s: %s.' =>
        '%s 님이 %s를 "%s"의 사유로 갱신함, 삭제됨: %5$s.',

      '%s updated %s for %s, added %s: %s; removed %s: %s.' =>
        '%s 님이 %s를 "%s"의 사유로 갱신함, 추가됨: %5$s; 삭제됨; %7$s.',

      'Permanently destroyed %s object(s).' => array(
        '객체 %s개 영구 삭제.',
        '객체 %s개 영구 삭제.',
      ),
      
      //홈
      'No "Unbreak Now!" Tasks: Nothing appears to be critically broken right now.' =>
        '"당장 해결해야 함!" 등급의 작업이 없습니다: 당장은 심각한 문제가 없는 듯합니다.',
      
      'No "Needs Triage" Tasks: No tasks in projects you are a member of need triage.' =>
        '"분배 필요" 등급의 작업이 없습니다: 분배 담당자라면, 축하합니다! 쉬세요!',
      
      'No Assigned Tasks: You have no assigned tasks.' =>
        '할당된 작업 없음: 당신이 담당할 작업이 없습니다.',
      
      'No Audits: No commits are waiting for you to audit them.' =>
        '검토 없음: 검토할 커밋이 없습니다.',
        
      'No Problem Commits: No one has raised concerns with your commits.' =>
        '문제되는 커밋 없음: 아무도 당신의 커밋에 이의를 제기하지 않았습니다.',
      
      'No Waiting Revisions: No revisions are waiting on you.' =>
        '대기 중인 리비전 없음: 당신을 기다리는 리비전이 없습니다.',
      
      //매니페스트
      'Cancel' => '취소',
      'Edit Task' => '작업 수정',
      'Merge Duplicates In' => '같은 작업 병합',
      'Create Subtask' => '세부작업 생성',
      'Edit Blocking Tasks' => '후행작업 수정',
      'Edit Differential Revisions' => '디퍼렌셜 검토 수정',
      'Edit Pholio Mocks' => '폴리오 모의실험 수정',
      'Unsubscribe' => '구독 취소',
      'Start Tracking Time' => '시간 추적 시작',
      'Stop Tracking Time' => '시간 추적 종료',
      'Award Token' => '토큰 수여',
      'Flag For Later' => '책갈피 지정',
      'DESCRIPTION' => '작업내용',
      'DESCRIPTION PREVIEW' => '미리보기',
      
      'TASKS TO MERGE' => '병합할 작업',
      'No results.' => '결과 없음',
      'Nothing attached.' => '아무것도 지정되지 않았습니다.',
      'These tasks will be merged into the current task and then closed. The current task will grow stronger.' =>
      '이 작업들은 현재의 작업에 모두 병합되고 닫힙니다. 이 작업은 더욱 더 성장할것입니다.',
      'Merge Tasks' => '병합 시작',
      'Parent Task' => '소속 작업',
      
      'CURRENT BLOCKING TASKS' => '현재 이 작업을 선행작업으로 두는 작업',
      'Save Blocking Tasks' => '선/후행작업 저장하기',
      
      'CURRENTLY ATTACHED REVISIONS' => '현재 지정되어있는 검토',
      'Save Revisions' => '검토 저장하기',
      'CURRENTLY ATTACHED MOCKS' => '현재 적용되어있는 모의실험',
      'Save Mocks' => '모의실험 저장',
      
      'What time did you start working?' => '언제부터 작업하셨나요?',
      'Start Timer' => '시작시간',
      'What time did you stop working?' => '언제까지 작업하셨나요?',
      'Started At' => '시작시간',
      'Stop Timer' => '종료시간',
      
      'You can flag this Maniphest Task if you want to remember to look at it later.' => '이 매니페스트 작업을 다음에 보기위해 기억하기 위해서 기록합니다.',
      
      '%s created this task.' => '%s 님이 이 작업을 만들었습니다.',
      '%s added a project: %s.' => '%s 님이 프로젝트를 추가했습니다: %s.',
      '%s moved this task to %s on the %s workboard.' => '%s 님이 이 작업을 %s상태로 %s로 옮겼습니다.',
      '%s added a subscriber: %s.' => '%s 님이 구독자를 추가했습니다: %s',
      '%s added a comment.' => '%s 님이 의견을 제시했습니다.',
      '%s created this object with visibility "%s".' => '%s 님이 이 객체를 %s만 볼 수 있게 만들었습니다.',
      '%s created this object with edit policy "%s".' => '%s 님이 이 객체를 %s만 수정할 수 있게 만들었습니다.',
      '%s raised the priority of this task from "%s" to "%s".' => '%s 님이 이 작업의 우선도를 %s에서 %s로 높였습니다.',
      '%s lowered the priority of this task from "%s" to "%s".' => '%s 님이 이 작업의 우선도를 %s에서 %s로 낮췄습니다.',
      '%s triaged this task as "%s" priority' => '%s 님이 이 작업의 우선도를 %s로 설정하였습니다.',
      'In %s, %s wrote:' => '%s에서 %s 님이 한 말을 인용하였습니다.',
      'This comment was removed by %s.' => '%s에 의해 삭제된 의견입니다.',
      
      '%s added a blocked task: %s' => '%s 님이 이 작업을 다음 작업들의 선행작업으로 설정하였습니다: %s',
      '%s removed a blocked task: %s' => '%s 님이 이 작업을 선행작업으로 설정한 것을 취소하였습니다: %s',
      
      '%s added a blocking task: %s' => '%s 님이 이 작업이 다음 작업을 선행으로 해야한다고 설정하였습니다: %s',
      '%s removed a blocking task: %s' => '%s 님이 다음 작업을 선행해야 한다는 것을 취소하였습니다: %s',
      '%s assigned this task to %s' => '%s 님이 이 작업을 %s에게 할당하였습니다.',
      '%s closed this task as "%s".' => '%s 님이 이 작업이 %s상태로 보고 닫았습니다.',
      
      'CC' => '구독자',
      'Older changes are hidden.' => '오래된 내용들을 감추었습니다.',
      'Show older changes.' => '오래된 내용 펼치기',
      'Author' => '저자',
      'Note' => '메모',
      // 매니페스트 작업
      'Home' =>
        '시작',
      
      'Command Center' =>
        '시작화면으로 돌아갑니다.',
      
      'Configure' =>
        '환경설정',
        
      'Core Applications' =>
        '핵심 어플리케이션',
        
      'Audit' =>
        '어딧',
        
      'Browse and Audit Commits' =>
        '커밋들을 둘러보고 검토합니다.',
      
      'Calendar (Prototype)' =>
        '캘린더 (프로토타입)',
      
      'Upcoming Events' =>
        '일정을 계획합니다.',
        
      'Conpherence' =>
        '컨페런스',
        
      'Chat with Others' =>
        '타인과 대화합니다.',
        
      'Dashboards' =>
        '대시보드',
        
      'Create Custom Pages' =>
        '자신만의 홈을 만들어보세요.',
        
      'Differential' =>
        '디퍼렌셜',
      
      'Review Code' =>
        '코드를 리뷰합니다.',
        
      'Diffusion' =>
        '디퓨젼',
        
      'Host and Browse Repositories' =>
        '저장소를 탐색합니다.',

      'Feed' =>
        '피드',
        
      'Review Recent Activity' =>
        '최근활동을 보여줍니다.',

      'Maniphest' =>
        '매니페스트',
        
      'Tasks and Bugs' =>
        '작업과 버그들을 보여줍니다.',

      'People' =>
        '피플',
        
      'User Accounts and Profiles' =>
        '등록된 사용자들을 보여줍니다.',

      'Phame (Prototype)' =>
        '패임 (프로토타입)',
      
      'Blog' =>
        '개인의 블로그를 관리합니다.',

      'Pholio' =>
        '폴리오',
      
      'Review Mocks and Design' =>
        '모의실험과 디자인을 리뷰합니다.',
        
      'Phriction' =>
        '프릭션',
        
      'Wiki' =>
        '자유롭게 읽고 쓰는 문서입니다.',

      'Phurl (Prototype)' =>
        '펄 (프로토타입)',
        
      'URL Shortener' =>
        'URL의 길이를 줄여줍니다.',
      
      'Ponder' =>
        '폰더',
      
      'Questions and Answers' =>
        '묻고 답하는 공간입니다.',

      'Projects' =>
        '프로젝트',
        
      'Get Organized' =>
        '체계적으로 계획해보세요.',

      'Releeph (Prototype)' =>
        '릴리프 (프로토타입)',
        
      'Pull Requests' =>
        '풀 리퀘스트를 관리합니다.',

      'Utilities' =>
        '유틸리티',
        
      'Almanac (Prototype)' =>
        '알마낙 (프로토타입)',
        
      'Service Directory' =>
        'Service Directory',
        
      'Badges (Prototype)' =>
        '뱃지 (프로토타입)',
        
      'Achievements and Notority' =>
        '상도 주고 놀려도 봅시다!',
        
      'Countdown' =>
        '카운트다운',
        
      'Countdown to Events' =>
        '다음 계획까진 얼마나 남았을까요?',

      'Diviner' =>
        '디바이너',
      
      'Documentation' =>
        '문서를 만들고 관리합니다.',
        
      'Drydock (Prototype)' =>
        '드라이독 (프로토타입)',
        
      'Allocate Software Resources' =>
        '소프트웨어 리소스를 할당합니다.',

      'Facts (Prototype)' =>
        '팩트 (프로토타입)',
        
      'Chart and Analyze Data' =>
        '자료를 기록하고 분석합니다.',
      
      'Files' =>
        '파일',
        
      'Store and Share Files' =>
        '파일들을 저장하고 공유합니다.',
      
      'Flags' =>
        '플래그',
        
      'Personal Bookmarks' =>
        '자신만의 책갈피를 만듭니다.',
        
      'Fund (Prototype)' =>
        '펀드 (프로토타입)',
      
      'Donate' =>
        '운영자에게 기부합니다.',

      'Harbormaster' =>
        '하버마스터',
      
      'Build/CI' =>
        '빌드와 CI를 관리합니다.',

      'Legalpad' =>
        '레갈패드',
        
      'Agreements and Signatures' =>
        '합의하고 결재합니다.',

      'Macro' =>
        '매크로',
        
      'Image Macros and Memes' =>
        '이미지 매크로를 관리합니다.',

      'Owners' =>
        '오너',
        
      'Own Source Code' =>
        '소스코드의 소유권을 관리합니다.',
        
      'Passphrase' =>
        '패스프레이즈',
        
      'Credential Store' =>
        'Credential Store',

      'Paste' =>
        '페이스트',
        
      'Share Text Snippets' =>
        '텍스트로 된 정보를 공유합니다.',
        
      'Phlux (Prototype)' =>
        '플럭스 (프로토타입)',
        
      'Key/Value Configuration Store' =>
        '변수에 대한 설정을 저장합니다.',
        
      'Phortune (Prototype)' =>
        '포츈 (프로토타입)',
        
      'Accounts and Billing' =>
        '계좌를 관리합니다.',

      'Phragment (Prototype)' =>
        '프래그먼트 (프로토타입)',
        
      'Versioned Artifact Storage' =>
        '수정된 아티팩트를 보관합니다.',
        
      'Phrequent (Prototype)' =>
        '프리퀀트 (프로토타입)',
      
      'Track Time Spent' =>
        '시간소모를 추적합니다.',
        
      'Slowvote' =>
        '슬로우봇',
        
      'Conduct Polls' =>
        '투표를 시행합니다.',
        
      'Spaces' =>
        '스페이스',
        
      'Policy Namespaces' =>
        '정책을 명명합니다.',

      'Tokens' =>
        '토큰',
        
      'Award and Acquire Trinkets' =>
        '토큰을 주고 칭찬해봅시다.',

      'Administration' =>
        '관리용 기능',
        
      'Auth' =>
        '어스',
        
      'Login/Registration' =>
        '로그인과 회원가입을 관리합니다.',

      'Config' =>
        '컨피그',
        
      'Configure Phabricator' =>
        '파브리케이터 환경설정입니다.',
        
      'Daemons' =>
        '데몬',
        
      'Manage Phabricator Daemons' =>
        '파브리케이터의 데몬을 관리합니다.',
        
      'Mail' =>
        '메일',
        
      'Send and Receive Mail' =>
        '메일을 주고받습니다.',

      'OAuth Server (Prototype)' =>
        'OAuth 서버 (프로토타입)',
        
      'OAuth Login Provider' =>
        'OAuth 로그인을 지원합니다.',
      
      'Developer Tools' =>
        '개발자 도구',
        
      'Conduit' =>
        '컨듀잇',
        
      'Developer API' =>
        '개발자를 위한 API입니다.',

      'Multimeter (Prototype)' =>
        '멀티미터 (프로토타입)',
        
      'Performance Sampler' =>
        'Performance Sampler',

      'PHPAST' =>
        'PHPAST',
        
      'Visual PHP Parser' =>
        'Visual PHP Parser',

      'UIExamples (Prototype)' =>
        'UI이그샘플 (프로토타입)',
      
      'Developer UI Examples' =>
        '개발자를 위해 제공되는 예시 UI들이 모여있습니다.',
        
      'XHProf' =>
        'XH프롭',
        
      'PHP Profiling Tool' =>
        'PHP 자료수집 도구입니다.',
      
      'Applications' =>
        '어플리케이션',
      
      'Explore More Applications' =>
        '더 많은 어플리케이션 찾기',
      
      'Customize Menu...' =>
        '메뉴 커스터마이즈',
      
      'Create Task' =>
        '새 작업',
        
      'Title' =>
        '제목',
      
      'Required' =>
        '필수사항',

      'Assigned To' =>
        '담당자',

      'Status' =>
        '상태',

      'Priority' =>
        '우선도',
      
      'Description' =>
        '내용',

      'Visible To' =>
        '열람 권한',
      
      'All Users' =>
        '모든 사용자',
      
      'Editable By' =>
        '수정 권한',
        
      'Subscribers' =>
        '구독자',

      'Create New Task' =>
        '새 작업 만들기',
      
      'Cancel' =>
        '취소',

      'Unbreak Now!' =>
        '당장 해결해야 함!',
      
      'Needs Triage' =>
        '분배 필요',
        
      'High' =>
        '높음',
        
      'Normal' =>
        '보통',
        
      'Low' =>
        '낮음',
      
      'Wishlist' =>
        '위시리스트',
      
      'QUERIES' =>
        '쿼리',
      
      'Assigned' =>
        '담당 중',
        
      'Authored' =>
        '본인 작성',
        
      'Subscribed' =>
        '구독 중',
        
      'Open Tasks' =>
        '열려있는 작업',
      
      'All Tasks' =>
        '모든 작업',
        
      'Edit Queries...' =>
        '쿼리 수정...',
        
      'SEARCH' =>
        '검색',
        
      'Advanced Search' =>
        '정밀 검색',
      
      'REPORTS' =>
        '보고서',
      
      'Reports' =>
        '보고서',
        
      'Open' =>
        '열려 있음',
        
      'Resolved' =>
        '해결됨',
        
      'Wontfix' =>
        '거절됨',
        
      'Decline' =>
        '거절됨',
        
      'Invalid' =>
        '작업이 아님',
      
      'Spite' =>
        '알 수 없음',
      
      'No "Unbreak Now!" Tasks: Nothing appears to be critically broken right now.' =>
        '"당장 해결해야 함!" 등급의 작업이 없습니다: 당장은 심각한 문제가 없는 듯합니다.',
      
      'No "Needs Triage" Tasks: No tasks in projects you are a member of need triage.' =>
        '"분배 필요" 등급의 작업이 없습니다: 분배 담당자라면, 축하합니다! 쉬세요!',
      
      'No Assigned Tasks: You have no assigned tasks.' =>
        '할당된 작업 없음: 당신이 담당하는 작업이 없습니다.',
      
      'No Audits: No commits are waiting for you to audit them.' =>
        '검토 없음: 검토할 커밋이 없습니다.',
        
      'No Problem Commits: No one has raised concerns with your commits.' =>
        '문제되는 커밋 없음: 아무도 당신의 커밋에 이의를 제기하지 않았습니다.',
      
      'No Waiting Revisions: No revisions are waiting on you.' =>
        '대기 중인 리비전 없음: 당신을 기다리는 리비전이 없습니다.'
    );
  }

}
