# 파브리케이터 한글화

파브리케이터 한글화 프로젝트입니다. 번역의 협업은 [리브레 위키 이슈 트래커](https://issue.librewiki.net)에서 진행되며, 저장소의 호스팅과 풀 리퀘스트만을 승인합니다.

# 사전 준비

번역을 위해서는 [github](https://github.com) 계정과 리브레 위키 이슈 트래커 계정이 필요합니다.

# 번역

저장소를 로컬에 clone하여 번역하든, 웹에서 번역하든 방법은 같습니다. PhabricatorKoreanTranslation.php 파일을 수정하고, 커밋한 후, 푸시하면 됩니다. 저장소 권한이 없을 경우 포크 저장소에 푸시한 후 풀 리퀘스트를 보내주세요. 여러 개의 풀 리퀘스트를 보내주시면 푸시 권한을 드립니다.

# 용어집, 주의사항
## 용어집
| 원문             	| 번역          	|
|------------------	|---------------	|
| commit           	| 커밋          	|
| dependencie      	| 의존성        	|
| member           	| 구성원        	|
| Audit            	| 검토          	|
| Review           	| 리뷰          	|
| Lint Message     	| 린트 메세지   	|
| Task             	| 작업          	|
| Action           	| 작업          	|
| user             	| 사용자        	|
| reviewer         	| 검토자        	|
| subscriber       	| 구독자        	|
| watcher          	| 주시자        	|
| participant      	| 참여자        	|
| rejection        	| 거부          	|
| update           	| 수정사항      	|
| reverting commit 	| 되돌리는 커밋 	|
| inline comment   	| 인라인 의견   	|
| owner            	| 오너          	|

## 주의사항
 * 다음 사항들은 최대한 지양해주세요.
   * 한영혼용 (예시: user가 이 이슈를 close했습니다.)
   * 어색한 번역체
   * Git 이슈를 만들때 이메일 주소(```user.email```)와 사용자명(```user.name```)을 올바르게 해주세요. (올바르지 않은 예시 : root@localhost)
 * 용어집을 준수하여 용어를 통일해주세요.
