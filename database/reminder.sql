/*
 Navicat Premium Data Transfer

 Source Server         : mms
 Source Server Type    : MySQL
 Source Server Version : 50736
 Source Host           : localhost:3306
 Source Schema         : reminder

 Target Server Type    : MySQL
 Target Server Version : 50736
 File Encoding         : 65001

 Date: 05/04/2022 19:13:55
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for failed_jobs
-- ----------------------------
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `failed_jobs_uuid_unique`(`uuid`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of failed_jobs
-- ----------------------------
INSERT INTO `failed_jobs` VALUES (1, '39312a16-99ee-4a1f-ab3e-136877d1b4c2', 'redis', 'emails', '{\"uuid\":\"39312a16-99ee-4a1f-ab3e-136877d1b4c2\",\"timeout\":null,\"id\":\"vk4t9NPk147N9TGOxmWlpcQE7HX4Q4pU\",\"backoff\":\"\",\"displayName\":\"App\\\\Mail\\\\MailDeliver\",\"maxTries\":null,\"maxExceptions\":null,\"retryUntil\":null,\"data\":{\"command\":\"O:34:\\\"Illuminate\\\\Mail\\\\SendQueuedMailable\\\":13:{s:8:\\\"mailable\\\";O:20:\\\"App\\\\Mail\\\\MailDeliver\\\":29:{s:7:\\\"\\u0000*\\u0000mail\\\";a:2:{i:0;O:15:\\\"App\\\\Models\\\\Note\\\":27:{s:11:\\\"\\u0000*\\u0000fillable\\\";a:4:{i:0;s:7:\\\"user_id\\\";i:1;s:6:\\\"tag_id\\\";i:2;s:4:\\\"text\\\";i:3;s:5:\\\"title\\\";}s:13:\\\"\\u0000*\\u0000connection\\\";s:5:\\\"mysql\\\";s:8:\\\"\\u0000*\\u0000table\\\";s:5:\\\"notes\\\";s:13:\\\"\\u0000*\\u0000primaryKey\\\";s:2:\\\"id\\\";s:10:\\\"\\u0000*\\u0000keyType\\\";s:3:\\\"int\\\";s:12:\\\"incrementing\\\";b:1;s:7:\\\"\\u0000*\\u0000with\\\";a:0:{}s:12:\\\"\\u0000*\\u0000withCount\\\";a:0:{}s:10:\\\"\\u0000*\\u0000perPage\\\";i:15;s:6:\\\"exists\\\";b:1;s:18:\\\"wasRecentlyCreated\\\";b:0;s:13:\\\"\\u0000*\\u0000attributes\\\";a:7:{s:2:\\\"id\\\";i:7;s:7:\\\"user_id\\\";i:1;s:6:\\\"tag_id\\\";i:1;s:5:\\\"title\\\";s:20:\\\"88个高效短语(7)\\\";s:4:\\\"text\\\";s:763:\\\"<p>71. Not that much 没有那么多&nbsp;<\\/p><p>72. I screwed up 我搞砸了<\\/p><p>73. What a coincidence！ 多么巧啊<\\/p><p>74. That\'s all right 没关系<\\/p><p>75. No such thing 没这回事<\\/p><p>76. That\'s lit 太棒了，很赞<\\/p><p>77. I am very tired 我很累<\\/p><p>78. You\'ve got it 你已经知道了<\\/p><p>79. Thank you anyway 还是要谢谢你<\\/p><p>80. The sun shines 阳关普照<\\/p><p>81. There it is 在那里，就是这样了<\\/p><p>82. You are so smart 你真聪明<\\/p><p>83. This will do 这样就可以<\\/p><p>84. Things happen 这种事是难免的<\\/p><p>85. no worries 没关系，别担心<\\/p><p>86. Pull yourself together 冷静下来 振作起来<\\/p><p>87. You astonish me 你让我很惊讶<\\/p><p>88. You rock !!  你很棒<\\/p><hr>\\\";s:10:\\\"created_at\\\";s:19:\\\"2021-09-15 13:19:45\\\";s:10:\\\"updated_at\\\";s:19:\\\"2021-09-15 13:20:50\\\";}s:11:\\\"\\u0000*\\u0000original\\\";a:7:{s:2:\\\"id\\\";i:7;s:7:\\\"user_id\\\";i:1;s:6:\\\"tag_id\\\";i:1;s:5:\\\"title\\\";s:20:\\\"88个高效短语(7)\\\";s:4:\\\"text\\\";s:763:\\\"<p>71. Not that much 没有那么多&nbsp;<\\/p><p>72. I screwed up 我搞砸了<\\/p><p>73. What a coincidence！ 多么巧啊<\\/p><p>74. That\'s all right 没关系<\\/p><p>75. No such thing 没这回事<\\/p><p>76. That\'s lit 太棒了，很赞<\\/p><p>77. I am very tired 我很累<\\/p><p>78. You\'ve got it 你已经知道了<\\/p><p>79. Thank you anyway 还是要谢谢你<\\/p><p>80. The sun shines 阳关普照<\\/p><p>81. There it is 在那里，就是这样了<\\/p><p>82. You are so smart 你真聪明<\\/p><p>83. This will do 这样就可以<\\/p><p>84. Things happen 这种事是难免的<\\/p><p>85. no worries 没关系，别担心<\\/p><p>86. Pull yourself together 冷静下来 振作起来<\\/p><p>87. You astonish me 你让我很惊讶<\\/p><p>88. You rock !!  你很棒<\\/p><hr>\\\";s:10:\\\"created_at\\\";s:19:\\\"2021-09-15 13:19:45\\\";s:10:\\\"updated_at\\\";s:19:\\\"2021-09-15 13:20:50\\\";}s:10:\\\"\\u0000*\\u0000changes\\\";a:0:{}s:8:\\\"\\u0000*\\u0000casts\\\";a:0:{}s:17:\\\"\\u0000*\\u0000classCastCache\\\";a:0:{}s:8:\\\"\\u0000*\\u0000dates\\\";a:0:{}s:13:\\\"\\u0000*\\u0000dateFormat\\\";N;s:10:\\\"\\u0000*\\u0000appends\\\";a:0:{}s:19:\\\"\\u0000*\\u0000dispatchesEvents\\\";a:0:{}s:14:\\\"\\u0000*\\u0000observables\\\";a:0:{}s:12:\\\"\\u0000*\\u0000relations\\\";a:1:{s:3:\\\"tag\\\";O:14:\\\"App\\\\Models\\\\Tag\\\":27:{s:11:\\\"\\u0000*\\u0000fillable\\\";a:2:{i:0;s:4:\\\"name\\\";i:1;s:7:\\\"user_id\\\";}s:13:\\\"\\u0000*\\u0000connection\\\";s:5:\\\"mysql\\\";s:8:\\\"\\u0000*\\u0000table\\\";s:4:\\\"tags\\\";s:13:\\\"\\u0000*\\u0000primaryKey\\\";s:2:\\\"id\\\";s:10:\\\"\\u0000*\\u0000keyType\\\";s:3:\\\"int\\\";s:12:\\\"incrementing\\\";b:1;s:7:\\\"\\u0000*\\u0000with\\\";a:0:{}s:12:\\\"\\u0000*\\u0000withCount\\\";a:0:{}s:10:\\\"\\u0000*\\u0000perPage\\\";i:15;s:6:\\\"exists\\\";b:1;s:18:\\\"wasRecentlyCreated\\\";b:0;s:13:\\\"\\u0000*\\u0000attributes\\\";a:5:{s:2:\\\"id\\\";i:1;s:4:\\\"name\\\";s:3:\\\"L2B\\\";s:7:\\\"user_id\\\";i:1;s:10:\\\"created_at\\\";s:19:\\\"2021-09-15 11:55:28\\\";s:10:\\\"updated_at\\\";s:19:\\\"2021-09-15 11:55:28\\\";}s:11:\\\"\\u0000*\\u0000original\\\";a:5:{s:2:\\\"id\\\";i:1;s:4:\\\"name\\\";s:3:\\\"L2B\\\";s:7:\\\"user_id\\\";i:1;s:10:\\\"created_at\\\";s:19:\\\"2021-09-15 11:55:28\\\";s:10:\\\"updated_at\\\";s:19:\\\"2021-09-15 11:55:28\\\";}s:10:\\\"\\u0000*\\u0000changes\\\";a:0:{}s:8:\\\"\\u0000*\\u0000casts\\\";a:0:{}s:17:\\\"\\u0000*\\u0000classCastCache\\\";a:0:{}s:8:\\\"\\u0000*\\u0000dates\\\";a:0:{}s:13:\\\"\\u0000*\\u0000dateFormat\\\";N;s:10:\\\"\\u0000*\\u0000appends\\\";a:0:{}s:19:\\\"\\u0000*\\u0000dispatchesEvents\\\";a:0:{}s:14:\\\"\\u0000*\\u0000observables\\\";a:0:{}s:12:\\\"\\u0000*\\u0000relations\\\";a:0:{}s:10:\\\"\\u0000*\\u0000touches\\\";a:0:{}s:10:\\\"timestamps\\\";b:1;s:9:\\\"\\u0000*\\u0000hidden\\\";a:0:{}s:10:\\\"\\u0000*\\u0000visible\\\";a:0:{}s:10:\\\"\\u0000*\\u0000guarded\\\";a:1:{i:0;s:1:\\\"*\\\";}}}s:10:\\\"\\u0000*\\u0000touches\\\";a:0:{}s:10:\\\"timestamps\\\";b:1;s:9:\\\"\\u0000*\\u0000hidden\\\";a:0:{}s:10:\\\"\\u0000*\\u0000visible\\\";a:0:{}s:10:\\\"\\u0000*\\u0000guarded\\\";a:1:{i:0;s:1:\\\"*\\\";}}i:1;O:15:\\\"App\\\\Models\\\\Note\\\":27:{s:11:\\\"\\u0000*\\u0000fillable\\\";a:4:{i:0;s:7:\\\"user_id\\\";i:1;s:6:\\\"tag_id\\\";i:2;s:4:\\\"text\\\";i:3;s:5:\\\"title\\\";}s:13:\\\"\\u0000*\\u0000connection\\\";s:5:\\\"mysql\\\";s:8:\\\"\\u0000*\\u0000table\\\";s:5:\\\"notes\\\";s:13:\\\"\\u0000*\\u0000primaryKey\\\";s:2:\\\"id\\\";s:10:\\\"\\u0000*\\u0000keyType\\\";s:3:\\\"int\\\";s:12:\\\"incrementing\\\";b:1;s:7:\\\"\\u0000*\\u0000with\\\";a:0:{}s:12:\\\"\\u0000*\\u0000withCount\\\";a:0:{}s:10:\\\"\\u0000*\\u0000perPage\\\";i:15;s:6:\\\"exists\\\";b:1;s:18:\\\"wasRecentlyCreated\\\";b:0;s:13:\\\"\\u0000*\\u0000attributes\\\";a:7:{s:2:\\\"id\\\";i:8;s:7:\\\"user_id\\\";i:1;s:6:\\\"tag_id\\\";i:2;s:5:\\\"title\\\";s:15:\\\"黑客与画家\\\";s:4:\\\"text\\\";s:1298:\\\"<p>如果别人告诉你应该相信什么，你就真的相信了，那么你就会和别人一样犯下同样的错误。如果你是南北战争前的南方庄园主，你会与北方开战；如果你是20世纪30年代的德国人，你会相信希特勒。<\\/p><p>---<\\/p><p>有时候，别人会对你说：“要根据社会需要，改造自己的思想（well-adjusted）。”这种说法隐含的意思似乎是，如果你不认同社会，那么肯定是你自己的问题。你同意这种说法吗？事实上，它不仅不对，而且会让历史倒退。如果你真的相信了它，凡是不认同社会之处，你连想都不敢想，马上就放弃自己的观点，那才会真正出问题。<\\/p><p>---<\\/p><p>人们都会说同样的话：“我们心态很开放，愿意接受新思想。”但是实际上，人们脑子里有一根界线，早就认准了什么是对的，什么是错的。［25］换言之，在他们看来，所有观点都是可以讨论的，除了那些错的观点。<\\/p><p>---<\\/p><p>团队越大，每个人的贡献就越接近于整体的平均值。所以，在不考虑其他因素的情况下，一个非常能干的人待在大公司里可能对他本人是一件很糟的事情，因为他的表现被其他不能干的人拖累了。<\\/p>\\\";s:10:\\\"created_at\\\";s:19:\\\"2021-09-22 18:27:18\\\";s:10:\\\"updated_at\\\";s:19:\\\"2021-09-22 18:30:23\\\";}s:11:\\\"\\u0000*\\u0000original\\\";a:7:{s:2:\\\"id\\\";i:8;s:7:\\\"user_id\\\";i:1;s:6:\\\"tag_id\\\";i:2;s:5:\\\"title\\\";s:15:\\\"黑客与画家\\\";s:4:\\\"text\\\";s:1298:\\\"<p>如果别人告诉你应该相信什么，你就真的相信了，那么你就会和别人一样犯下同样的错误。如果你是南北战争前的南方庄园主，你会与北方开战；如果你是20世纪30年代的德国人，你会相信希特勒。<\\/p><p>---<\\/p><p>有时候，别人会对你说：“要根据社会需要，改造自己的思想（well-adjusted）。”这种说法隐含的意思似乎是，如果你不认同社会，那么肯定是你自己的问题。你同意这种说法吗？事实上，它不仅不对，而且会让历史倒退。如果你真的相信了它，凡是不认同社会之处，你连想都不敢想，马上就放弃自己的观点，那才会真正出问题。<\\/p><p>---<\\/p><p>人们都会说同样的话：“我们心态很开放，愿意接受新思想。”但是实际上，人们脑子里有一根界线，早就认准了什么是对的，什么是错的。［25］换言之，在他们看来，所有观点都是可以讨论的，除了那些错的观点。<\\/p><p>---<\\/p><p>团队越大，每个人的贡献就越接近于整体的平均值。所以，在不考虑其他因素的情况下，一个非常能干的人待在大公司里可能对他本人是一件很糟的事情，因为他的表现被其他不能干的人拖累了。<\\/p>\\\";s:10:\\\"created_at\\\";s:19:\\\"2021-09-22 18:27:18\\\";s:10:\\\"updated_at\\\";s:19:\\\"2021-09-22 18:30:23\\\";}s:10:\\\"\\u0000*\\u0000changes\\\";a:0:{}s:8:\\\"\\u0000*\\u0000casts\\\";a:0:{}s:17:\\\"\\u0000*\\u0000classCastCache\\\";a:0:{}s:8:\\\"\\u0000*\\u0000dates\\\";a:0:{}s:13:\\\"\\u0000*\\u0000dateFormat\\\";N;s:10:\\\"\\u0000*\\u0000appends\\\";a:0:{}s:19:\\\"\\u0000*\\u0000dispatchesEvents\\\";a:0:{}s:14:\\\"\\u0000*\\u0000observables\\\";a:0:{}s:12:\\\"\\u0000*\\u0000relations\\\";a:1:{s:3:\\\"tag\\\";O:14:\\\"App\\\\Models\\\\Tag\\\":27:{s:11:\\\"\\u0000*\\u0000fillable\\\";a:2:{i:0;s:4:\\\"name\\\";i:1;s:7:\\\"user_id\\\";}s:13:\\\"\\u0000*\\u0000connection\\\";s:5:\\\"mysql\\\";s:8:\\\"\\u0000*\\u0000table\\\";s:4:\\\"tags\\\";s:13:\\\"\\u0000*\\u0000primaryKey\\\";s:2:\\\"id\\\";s:10:\\\"\\u0000*\\u0000keyType\\\";s:3:\\\"int\\\";s:12:\\\"incrementing\\\";b:1;s:7:\\\"\\u0000*\\u0000with\\\";a:0:{}s:12:\\\"\\u0000*\\u0000withCount\\\";a:0:{}s:10:\\\"\\u0000*\\u0000perPage\\\";i:15;s:6:\\\"exists\\\";b:1;s:18:\\\"wasRecentlyCreated\\\";b:0;s:13:\\\"\\u0000*\\u0000attributes\\\";a:5:{s:2:\\\"id\\\";i:2;s:4:\\\"name\\\";s:6:\\\"语录\\\";s:7:\\\"user_id\\\";i:1;s:10:\\\"created_at\\\";s:19:\\\"2021-09-15 11:55:39\\\";s:10:\\\"updated_at\\\";s:19:\\\"2021-09-15 11:55:39\\\";}s:11:\\\"\\u0000*\\u0000original\\\";a:5:{s:2:\\\"id\\\";i:2;s:4:\\\"name\\\";s:6:\\\"语录\\\";s:7:\\\"user_id\\\";i:1;s:10:\\\"created_at\\\";s:19:\\\"2021-09-15 11:55:39\\\";s:10:\\\"updated_at\\\";s:19:\\\"2021-09-15 11:55:39\\\";}s:10:\\\"\\u0000*\\u0000changes\\\";a:0:{}s:8:\\\"\\u0000*\\u0000casts\\\";a:0:{}s:17:\\\"\\u0000*\\u0000classCastCache\\\";a:0:{}s:8:\\\"\\u0000*\\u0000dates\\\";a:0:{}s:13:\\\"\\u0000*\\u0000dateFormat\\\";N;s:10:\\\"\\u0000*\\u0000appends\\\";a:0:{}s:19:\\\"\\u0000*\\u0000dispatchesEvents\\\";a:0:{}s:14:\\\"\\u0000*\\u0000observables\\\";a:0:{}s:12:\\\"\\u0000*\\u0000relations\\\";a:0:{}s:10:\\\"\\u0000*\\u0000touches\\\";a:0:{}s:10:\\\"timestamps\\\";b:1;s:9:\\\"\\u0000*\\u0000hidden\\\";a:0:{}s:10:\\\"\\u0000*\\u0000visible\\\";a:0:{}s:10:\\\"\\u0000*\\u0000guarded\\\";a:1:{i:0;s:1:\\\"*\\\";}}}s:10:\\\"\\u0000*\\u0000touches\\\";a:0:{}s:10:\\\"timestamps\\\";b:1;s:9:\\\"\\u0000*\\u0000hidden\\\";a:0:{}s:10:\\\"\\u0000*\\u0000visible\\\";a:0:{}s:10:\\\"\\u0000*\\u0000guarded\\\";a:1:{i:0;s:1:\\\"*\\\";}}}s:6:\\\"locale\\\";N;s:4:\\\"from\\\";a:0:{}s:2:\\\"to\\\";a:1:{i:0;a:2:{s:4:\\\"name\\\";N;s:7:\\\"address\\\";s:25:\\\"jeristianokuang@gmail.com\\\";}}s:2:\\\"cc\\\";a:0:{}s:3:\\\"bcc\\\";a:0:{}s:7:\\\"replyTo\\\";a:0:{}s:7:\\\"subject\\\";N;s:11:\\\"\\u0000*\\u0000markdown\\\";N;s:7:\\\"\\u0000*\\u0000html\\\";N;s:4:\\\"view\\\";N;s:8:\\\"textView\\\";N;s:8:\\\"viewData\\\";a:0:{}s:11:\\\"attachments\\\";a:0:{}s:14:\\\"rawAttachments\\\";a:0:{}s:15:\\\"diskAttachments\\\";a:0:{}s:9:\\\"callbacks\\\";a:0:{}s:5:\\\"theme\\\";N;s:6:\\\"mailer\\\";s:4:\\\"smtp\\\";s:29:\\\"\\u0000*\\u0000assertionableRenderStrings\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";s:6:\\\"emails\\\";s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;s:17:\\\"shouldBeEncrypted\\\";b:0;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}\",\"commandName\":\"Illuminate\\\\Mail\\\\SendQueuedMailable\"},\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"attempts\":1}', 'Illuminate\\Queue\\MaxAttemptsExceededException: App\\Mail\\MailDeliver has been attempted too many times or run too long. The job may have previously timed out. in /var/www/code/reminder/vendor/laravel/framework/src/Illuminate/Queue/Worker.php:717\nStack trace:\n#0 /var/www/code/reminder/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(486): Illuminate\\Queue\\Worker->maxAttemptsExceededException(Object(Illuminate\\Queue\\Jobs\\RedisJob))\n#1 /var/www/code/reminder/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(400): Illuminate\\Queue\\Worker->markJobAsFailedIfAlreadyExceedsMaxAttempts(\'redis\', Object(Illuminate\\Queue\\Jobs\\RedisJob), 1)\n#2 /var/www/code/reminder/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(360): Illuminate\\Queue\\Worker->process(\'redis\', Object(Illuminate\\Queue\\Jobs\\RedisJob), Object(Illuminate\\Queue\\WorkerOptions))\n#3 /var/www/code/reminder/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(158): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\RedisJob), \'redis\', Object(Illuminate\\Queue\\WorkerOptions))\n#4 /var/www/code/reminder/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(117): Illuminate\\Queue\\Worker->daemon(\'redis\', \'emails\', Object(Illuminate\\Queue\\WorkerOptions))\n#5 /var/www/code/reminder/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(101): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'redis\', \'emails\')\n#6 /var/www/code/reminder/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()\n#7 /var/www/code/reminder/vendor/laravel/framework/src/Illuminate/Container/Util.php(40): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#8 /var/www/code/reminder/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#9 /var/www/code/reminder/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(37): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#10 /var/www/code/reminder/vendor/laravel/framework/src/Illuminate/Container/Container.php(610): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#11 /var/www/code/reminder/vendor/laravel/framework/src/Illuminate/Console/Command.php(136): Illuminate\\Container\\Container->call(Array)\n#12 /var/www/code/reminder/vendor/symfony/console/Command/Command.php(256): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#13 /var/www/code/reminder/vendor/laravel/framework/src/Illuminate/Console/Command.php(121): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#14 /var/www/code/reminder/vendor/symfony/console/Application.php(971): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#15 /var/www/code/reminder/vendor/symfony/console/Application.php(290): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#16 /var/www/code/reminder/vendor/symfony/console/Application.php(166): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#17 /var/www/code/reminder/vendor/laravel/framework/src/Illuminate/Console/Application.php(92): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#18 /var/www/code/reminder/vendor/laravel/framework/src/Illuminate/Foundation/Console/Kernel.php(129): Illuminate\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#19 /var/www/code/reminder/artisan(37): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#20 {main}', '2021-09-23 18:16:37');
INSERT INTO `failed_jobs` VALUES (2, '23438f42-5490-411e-963b-7b27c5fa61eb', 'redis', 'emails', '{\"uuid\":\"23438f42-5490-411e-963b-7b27c5fa61eb\",\"timeout\":null,\"id\":\"YT8o0awN32wo0CmBuvuaP5YQwgC2VuHe\",\"backoff\":\"\",\"displayName\":\"App\\\\Mail\\\\MailDeliver\",\"maxTries\":null,\"maxExceptions\":null,\"retryUntil\":null,\"data\":{\"command\":\"O:34:\\\"Illuminate\\\\Mail\\\\SendQueuedMailable\\\":13:{s:8:\\\"mailable\\\";O:20:\\\"App\\\\Mail\\\\MailDeliver\\\":29:{s:7:\\\"\\u0000*\\u0000mail\\\";a:2:{i:0;O:15:\\\"App\\\\Models\\\\Note\\\":27:{s:11:\\\"\\u0000*\\u0000fillable\\\";a:4:{i:0;s:7:\\\"user_id\\\";i:1;s:6:\\\"tag_id\\\";i:2;s:4:\\\"text\\\";i:3;s:5:\\\"title\\\";}s:13:\\\"\\u0000*\\u0000connection\\\";s:5:\\\"mysql\\\";s:8:\\\"\\u0000*\\u0000table\\\";s:5:\\\"notes\\\";s:13:\\\"\\u0000*\\u0000primaryKey\\\";s:2:\\\"id\\\";s:10:\\\"\\u0000*\\u0000keyType\\\";s:3:\\\"int\\\";s:12:\\\"incrementing\\\";b:1;s:7:\\\"\\u0000*\\u0000with\\\";a:0:{}s:12:\\\"\\u0000*\\u0000withCount\\\";a:0:{}s:10:\\\"\\u0000*\\u0000perPage\\\";i:15;s:6:\\\"exists\\\";b:1;s:18:\\\"wasRecentlyCreated\\\";b:0;s:13:\\\"\\u0000*\\u0000attributes\\\";a:7:{s:2:\\\"id\\\";i:6;s:7:\\\"user_id\\\";i:1;s:6:\\\"tag_id\\\";i:1;s:5:\\\"title\\\";s:20:\\\"88个高效短语(6)\\\";s:4:\\\"text\\\";s:473:\\\"<p>1. What a joke 简直是开玩笑<\\/p><p>2.  He doesn\'t smoke 他不抽烟<\\/p><p>3.  Tom passed away 汤姆去世了<\\/p><p>4.  It\'s getting dark 天黑了<\\/p><p>5. That\'s really funny 那太有趣了<\\/p><p>6.  Is it serious? （这）严重吗？<\\/p><p>7.  You are a genius 你真是个天才<\\/p><p>8. Let\'s find out  我们一起做吧<\\/p><p>9.  I freaked out 吓死我了，气死我了<\\/p><p>10.  It\'s all true 这都是真的11.  She\'s so charming 他可真迷人<\\/p>\\\";s:10:\\\"created_at\\\";s:19:\\\"2021-09-15 13:18:02\\\";s:10:\\\"updated_at\\\";s:19:\\\"2021-09-15 13:18:26\\\";}s:11:\\\"\\u0000*\\u0000original\\\";a:7:{s:2:\\\"id\\\";i:6;s:7:\\\"user_id\\\";i:1;s:6:\\\"tag_id\\\";i:1;s:5:\\\"title\\\";s:20:\\\"88个高效短语(6)\\\";s:4:\\\"text\\\";s:473:\\\"<p>1. What a joke 简直是开玩笑<\\/p><p>2.  He doesn\'t smoke 他不抽烟<\\/p><p>3.  Tom passed away 汤姆去世了<\\/p><p>4.  It\'s getting dark 天黑了<\\/p><p>5. That\'s really funny 那太有趣了<\\/p><p>6.  Is it serious? （这）严重吗？<\\/p><p>7.  You are a genius 你真是个天才<\\/p><p>8. Let\'s find out  我们一起做吧<\\/p><p>9.  I freaked out 吓死我了，气死我了<\\/p><p>10.  It\'s all true 这都是真的11.  She\'s so charming 他可真迷人<\\/p>\\\";s:10:\\\"created_at\\\";s:19:\\\"2021-09-15 13:18:02\\\";s:10:\\\"updated_at\\\";s:19:\\\"2021-09-15 13:18:26\\\";}s:10:\\\"\\u0000*\\u0000changes\\\";a:0:{}s:8:\\\"\\u0000*\\u0000casts\\\";a:0:{}s:17:\\\"\\u0000*\\u0000classCastCache\\\";a:0:{}s:8:\\\"\\u0000*\\u0000dates\\\";a:0:{}s:13:\\\"\\u0000*\\u0000dateFormat\\\";N;s:10:\\\"\\u0000*\\u0000appends\\\";a:0:{}s:19:\\\"\\u0000*\\u0000dispatchesEvents\\\";a:0:{}s:14:\\\"\\u0000*\\u0000observables\\\";a:0:{}s:12:\\\"\\u0000*\\u0000relations\\\";a:1:{s:3:\\\"tag\\\";O:14:\\\"App\\\\Models\\\\Tag\\\":27:{s:11:\\\"\\u0000*\\u0000fillable\\\";a:2:{i:0;s:4:\\\"name\\\";i:1;s:7:\\\"user_id\\\";}s:13:\\\"\\u0000*\\u0000connection\\\";s:5:\\\"mysql\\\";s:8:\\\"\\u0000*\\u0000table\\\";s:4:\\\"tags\\\";s:13:\\\"\\u0000*\\u0000primaryKey\\\";s:2:\\\"id\\\";s:10:\\\"\\u0000*\\u0000keyType\\\";s:3:\\\"int\\\";s:12:\\\"incrementing\\\";b:1;s:7:\\\"\\u0000*\\u0000with\\\";a:0:{}s:12:\\\"\\u0000*\\u0000withCount\\\";a:0:{}s:10:\\\"\\u0000*\\u0000perPage\\\";i:15;s:6:\\\"exists\\\";b:1;s:18:\\\"wasRecentlyCreated\\\";b:0;s:13:\\\"\\u0000*\\u0000attributes\\\";a:5:{s:2:\\\"id\\\";i:1;s:4:\\\"name\\\";s:3:\\\"L2B\\\";s:7:\\\"user_id\\\";i:1;s:10:\\\"created_at\\\";s:19:\\\"2021-09-15 11:55:28\\\";s:10:\\\"updated_at\\\";s:19:\\\"2021-09-15 11:55:28\\\";}s:11:\\\"\\u0000*\\u0000original\\\";a:5:{s:2:\\\"id\\\";i:1;s:4:\\\"name\\\";s:3:\\\"L2B\\\";s:7:\\\"user_id\\\";i:1;s:10:\\\"created_at\\\";s:19:\\\"2021-09-15 11:55:28\\\";s:10:\\\"updated_at\\\";s:19:\\\"2021-09-15 11:55:28\\\";}s:10:\\\"\\u0000*\\u0000changes\\\";a:0:{}s:8:\\\"\\u0000*\\u0000casts\\\";a:0:{}s:17:\\\"\\u0000*\\u0000classCastCache\\\";a:0:{}s:8:\\\"\\u0000*\\u0000dates\\\";a:0:{}s:13:\\\"\\u0000*\\u0000dateFormat\\\";N;s:10:\\\"\\u0000*\\u0000appends\\\";a:0:{}s:19:\\\"\\u0000*\\u0000dispatchesEvents\\\";a:0:{}s:14:\\\"\\u0000*\\u0000observables\\\";a:0:{}s:12:\\\"\\u0000*\\u0000relations\\\";a:0:{}s:10:\\\"\\u0000*\\u0000touches\\\";a:0:{}s:10:\\\"timestamps\\\";b:1;s:9:\\\"\\u0000*\\u0000hidden\\\";a:0:{}s:10:\\\"\\u0000*\\u0000visible\\\";a:0:{}s:10:\\\"\\u0000*\\u0000guarded\\\";a:1:{i:0;s:1:\\\"*\\\";}}}s:10:\\\"\\u0000*\\u0000touches\\\";a:0:{}s:10:\\\"timestamps\\\";b:1;s:9:\\\"\\u0000*\\u0000hidden\\\";a:0:{}s:10:\\\"\\u0000*\\u0000visible\\\";a:0:{}s:10:\\\"\\u0000*\\u0000guarded\\\";a:1:{i:0;s:1:\\\"*\\\";}}i:1;O:15:\\\"App\\\\Models\\\\Note\\\":27:{s:11:\\\"\\u0000*\\u0000fillable\\\";a:4:{i:0;s:7:\\\"user_id\\\";i:1;s:6:\\\"tag_id\\\";i:2;s:4:\\\"text\\\";i:3;s:5:\\\"title\\\";}s:13:\\\"\\u0000*\\u0000connection\\\";s:5:\\\"mysql\\\";s:8:\\\"\\u0000*\\u0000table\\\";s:5:\\\"notes\\\";s:13:\\\"\\u0000*\\u0000primaryKey\\\";s:2:\\\"id\\\";s:10:\\\"\\u0000*\\u0000keyType\\\";s:3:\\\"int\\\";s:12:\\\"incrementing\\\";b:1;s:7:\\\"\\u0000*\\u0000with\\\";a:0:{}s:12:\\\"\\u0000*\\u0000withCount\\\";a:0:{}s:10:\\\"\\u0000*\\u0000perPage\\\";i:15;s:6:\\\"exists\\\";b:1;s:18:\\\"wasRecentlyCreated\\\";b:0;s:13:\\\"\\u0000*\\u0000attributes\\\";a:7:{s:2:\\\"id\\\";i:9;s:7:\\\"user_id\\\";i:1;s:6:\\\"tag_id\\\";i:2;s:5:\\\"title\\\";s:15:\\\"黑客与画家\\\";s:4:\\\"text\\\";s:277:\\\"<p>如果别人告诉你应该相信什么，你就真的相信了，那么你就会和别人一样犯下同样的错误。如果你是南北战争前的南方庄园主，你会与北方开战；如果你是20世纪30年代的德国人，你会相信希特勒。<\\/p><p><br><\\/p>\\\";s:10:\\\"created_at\\\";s:19:\\\"2021-09-22 18:34:39\\\";s:10:\\\"updated_at\\\";s:19:\\\"2021-09-22 18:34:39\\\";}s:11:\\\"\\u0000*\\u0000original\\\";a:7:{s:2:\\\"id\\\";i:9;s:7:\\\"user_id\\\";i:1;s:6:\\\"tag_id\\\";i:2;s:5:\\\"title\\\";s:15:\\\"黑客与画家\\\";s:4:\\\"text\\\";s:277:\\\"<p>如果别人告诉你应该相信什么，你就真的相信了，那么你就会和别人一样犯下同样的错误。如果你是南北战争前的南方庄园主，你会与北方开战；如果你是20世纪30年代的德国人，你会相信希特勒。<\\/p><p><br><\\/p>\\\";s:10:\\\"created_at\\\";s:19:\\\"2021-09-22 18:34:39\\\";s:10:\\\"updated_at\\\";s:19:\\\"2021-09-22 18:34:39\\\";}s:10:\\\"\\u0000*\\u0000changes\\\";a:0:{}s:8:\\\"\\u0000*\\u0000casts\\\";a:0:{}s:17:\\\"\\u0000*\\u0000classCastCache\\\";a:0:{}s:8:\\\"\\u0000*\\u0000dates\\\";a:0:{}s:13:\\\"\\u0000*\\u0000dateFormat\\\";N;s:10:\\\"\\u0000*\\u0000appends\\\";a:0:{}s:19:\\\"\\u0000*\\u0000dispatchesEvents\\\";a:0:{}s:14:\\\"\\u0000*\\u0000observables\\\";a:0:{}s:12:\\\"\\u0000*\\u0000relations\\\";a:1:{s:3:\\\"tag\\\";O:14:\\\"App\\\\Models\\\\Tag\\\":27:{s:11:\\\"\\u0000*\\u0000fillable\\\";a:2:{i:0;s:4:\\\"name\\\";i:1;s:7:\\\"user_id\\\";}s:13:\\\"\\u0000*\\u0000connection\\\";s:5:\\\"mysql\\\";s:8:\\\"\\u0000*\\u0000table\\\";s:4:\\\"tags\\\";s:13:\\\"\\u0000*\\u0000primaryKey\\\";s:2:\\\"id\\\";s:10:\\\"\\u0000*\\u0000keyType\\\";s:3:\\\"int\\\";s:12:\\\"incrementing\\\";b:1;s:7:\\\"\\u0000*\\u0000with\\\";a:0:{}s:12:\\\"\\u0000*\\u0000withCount\\\";a:0:{}s:10:\\\"\\u0000*\\u0000perPage\\\";i:15;s:6:\\\"exists\\\";b:1;s:18:\\\"wasRecentlyCreated\\\";b:0;s:13:\\\"\\u0000*\\u0000attributes\\\";a:5:{s:2:\\\"id\\\";i:2;s:4:\\\"name\\\";s:6:\\\"语录\\\";s:7:\\\"user_id\\\";i:1;s:10:\\\"created_at\\\";s:19:\\\"2021-09-15 11:55:39\\\";s:10:\\\"updated_at\\\";s:19:\\\"2021-09-15 11:55:39\\\";}s:11:\\\"\\u0000*\\u0000original\\\";a:5:{s:2:\\\"id\\\";i:2;s:4:\\\"name\\\";s:6:\\\"语录\\\";s:7:\\\"user_id\\\";i:1;s:10:\\\"created_at\\\";s:19:\\\"2021-09-15 11:55:39\\\";s:10:\\\"updated_at\\\";s:19:\\\"2021-09-15 11:55:39\\\";}s:10:\\\"\\u0000*\\u0000changes\\\";a:0:{}s:8:\\\"\\u0000*\\u0000casts\\\";a:0:{}s:17:\\\"\\u0000*\\u0000classCastCache\\\";a:0:{}s:8:\\\"\\u0000*\\u0000dates\\\";a:0:{}s:13:\\\"\\u0000*\\u0000dateFormat\\\";N;s:10:\\\"\\u0000*\\u0000appends\\\";a:0:{}s:19:\\\"\\u0000*\\u0000dispatchesEvents\\\";a:0:{}s:14:\\\"\\u0000*\\u0000observables\\\";a:0:{}s:12:\\\"\\u0000*\\u0000relations\\\";a:0:{}s:10:\\\"\\u0000*\\u0000touches\\\";a:0:{}s:10:\\\"timestamps\\\";b:1;s:9:\\\"\\u0000*\\u0000hidden\\\";a:0:{}s:10:\\\"\\u0000*\\u0000visible\\\";a:0:{}s:10:\\\"\\u0000*\\u0000guarded\\\";a:1:{i:0;s:1:\\\"*\\\";}}}s:10:\\\"\\u0000*\\u0000touches\\\";a:0:{}s:10:\\\"timestamps\\\";b:1;s:9:\\\"\\u0000*\\u0000hidden\\\";a:0:{}s:10:\\\"\\u0000*\\u0000visible\\\";a:0:{}s:10:\\\"\\u0000*\\u0000guarded\\\";a:1:{i:0;s:1:\\\"*\\\";}}}s:6:\\\"locale\\\";N;s:4:\\\"from\\\";a:0:{}s:2:\\\"to\\\";a:1:{i:0;a:2:{s:4:\\\"name\\\";N;s:7:\\\"address\\\";s:25:\\\"jeristianokuang@gmail.com\\\";}}s:2:\\\"cc\\\";a:0:{}s:3:\\\"bcc\\\";a:0:{}s:7:\\\"replyTo\\\";a:0:{}s:7:\\\"subject\\\";N;s:11:\\\"\\u0000*\\u0000markdown\\\";N;s:7:\\\"\\u0000*\\u0000html\\\";N;s:4:\\\"view\\\";N;s:8:\\\"textView\\\";N;s:8:\\\"viewData\\\";a:0:{}s:11:\\\"attachments\\\";a:0:{}s:14:\\\"rawAttachments\\\";a:0:{}s:15:\\\"diskAttachments\\\";a:0:{}s:9:\\\"callbacks\\\";a:0:{}s:5:\\\"theme\\\";N;s:6:\\\"mailer\\\";s:4:\\\"smtp\\\";s:29:\\\"\\u0000*\\u0000assertionableRenderStrings\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";s:6:\\\"emails\\\";s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;s:17:\\\"shouldBeEncrypted\\\";b:0;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}\",\"commandName\":\"Illuminate\\\\Mail\\\\SendQueuedMailable\"},\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"attempts\":1}', 'Illuminate\\Queue\\MaxAttemptsExceededException: App\\Mail\\MailDeliver has been attempted too many times or run too long. The job may have previously timed out. in /var/www/code/reminder/vendor/laravel/framework/src/Illuminate/Queue/Worker.php:717\nStack trace:\n#0 /var/www/code/reminder/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(486): Illuminate\\Queue\\Worker->maxAttemptsExceededException(Object(Illuminate\\Queue\\Jobs\\RedisJob))\n#1 /var/www/code/reminder/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(400): Illuminate\\Queue\\Worker->markJobAsFailedIfAlreadyExceedsMaxAttempts(\'redis\', Object(Illuminate\\Queue\\Jobs\\RedisJob), 1)\n#2 /var/www/code/reminder/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(360): Illuminate\\Queue\\Worker->process(\'redis\', Object(Illuminate\\Queue\\Jobs\\RedisJob), Object(Illuminate\\Queue\\WorkerOptions))\n#3 /var/www/code/reminder/vendor/laravel/framework/src/Illuminate/Queue/Worker.php(158): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\RedisJob), \'redis\', Object(Illuminate\\Queue\\WorkerOptions))\n#4 /var/www/code/reminder/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(117): Illuminate\\Queue\\Worker->daemon(\'redis\', \'emails\', Object(Illuminate\\Queue\\WorkerOptions))\n#5 /var/www/code/reminder/vendor/laravel/framework/src/Illuminate/Queue/Console/WorkCommand.php(101): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'redis\', \'emails\')\n#6 /var/www/code/reminder/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()\n#7 /var/www/code/reminder/vendor/laravel/framework/src/Illuminate/Container/Util.php(40): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#8 /var/www/code/reminder/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#9 /var/www/code/reminder/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php(37): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#10 /var/www/code/reminder/vendor/laravel/framework/src/Illuminate/Container/Container.php(610): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#11 /var/www/code/reminder/vendor/laravel/framework/src/Illuminate/Console/Command.php(136): Illuminate\\Container\\Container->call(Array)\n#12 /var/www/code/reminder/vendor/symfony/console/Command/Command.php(256): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#13 /var/www/code/reminder/vendor/laravel/framework/src/Illuminate/Console/Command.php(121): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#14 /var/www/code/reminder/vendor/symfony/console/Application.php(971): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#15 /var/www/code/reminder/vendor/symfony/console/Application.php(290): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#16 /var/www/code/reminder/vendor/symfony/console/Application.php(166): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#17 /var/www/code/reminder/vendor/laravel/framework/src/Illuminate/Console/Application.php(92): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#18 /var/www/code/reminder/vendor/laravel/framework/src/Illuminate/Foundation/Console/Kernel.php(129): Illuminate\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#19 /var/www/code/reminder/artisan(37): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#20 {main}', '2021-10-08 08:36:08');

-- ----------------------------
-- Table structure for job_batches
-- ----------------------------
DROP TABLE IF EXISTS `job_batches`;
CREATE TABLE `job_batches`  (
  `id` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `cancelled_at` int(11) NULL DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of job_batches
-- ----------------------------

-- ----------------------------
-- Table structure for jobs
-- ----------------------------
DROP TABLE IF EXISTS `jobs`;
CREATE TABLE `jobs`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `queue` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED NULL DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `jobs_queue_index`(`queue`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of jobs
-- ----------------------------

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 12 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (1, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES (2, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO `migrations` VALUES (3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1);
INSERT INTO `migrations` VALUES (4, '2019_08_19_000000_create_failed_jobs_table', 1);
INSERT INTO `migrations` VALUES (5, '2019_12_14_000001_create_personal_access_tokens_table', 1);
INSERT INTO `migrations` VALUES (6, '2021_02_26_075250_create_sessions_table', 1);
INSERT INTO `migrations` VALUES (7, '2021_03_01_015059_create_notes_table', 1);
INSERT INTO `migrations` VALUES (8, '2021_03_01_030335_create_tags_table', 1);
INSERT INTO `migrations` VALUES (9, '2021_03_03_060358_create_subscriptions_table', 1);
INSERT INTO `migrations` VALUES (10, '2021_03_04_094630_create_job_batches_table', 1);
INSERT INTO `migrations` VALUES (11, '2021_03_04_094649_create_jobs_table', 1);

-- ----------------------------
-- Table structure for notes
-- ----------------------------
DROP TABLE IF EXISTS `notes`;
CREATE TABLE `notes`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) UNSIGNED NOT NULL COMMENT '发布用户id',
  `tag_id` int(11) NOT NULL COMMENT '标签类型',
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '笔记来源或标题',
  `text` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '笔记内容',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 58 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of notes
-- ----------------------------
INSERT INTO `notes` VALUES (1, 1, 1, '88个高效短语(1)', '<p>1 lucky you!  你真幸运啊！</p><p>2 It\'s your call 由你来决定</p><p>3 Are you serious? 你是认真的吗</p><p>4 Not gonna happen (那事)不会发生</p><p>5 We\'re heading home  我们要回家了</p><p>6 Get real 面对现实把（熟人）</p><p>7 Keep it up 坚持下去</p><p>8 You never know 世事难料 （你永远无法知道）</p><p>9 Just in case 以防万一</p><p>10   I suppose not 我想不是</p>', '2021-09-15 12:04:43', '2021-09-15 12:05:38');
INSERT INTO `notes` VALUES (2, 1, 1, '88个高效短语(2)', '<p>11.Can\'t complain 还不错（问候语回答：还不错）</p><p>12.You\'re all set 你的事情都办完了，都已经准备好了，你可以开始了 （银行柜台，驾校考试等）</p><p>13. I gotta run 我得走了</p><p>14. Catch you later 回头见</p><p>15. It\'s getting worse 越来越糟糕了</p><p>16. You sold me 你说服了我 you sold me out 你出卖了我</p><p>17. Here\'s your change 这是你的找零</p><p>18. Keep the change 不用找零了</p><p>19. Thanks a million 非常感谢</p><p>20. Is that true? 那是真的吗？</p>', '2021-09-15 13:10:18', '2021-09-15 13:10:44');
INSERT INTO `notes` VALUES (3, 1, 1, '88个高效短语(3)', '<p>1.   I don\'t recall 我不记得了</p><p>2.   How\'s everything? 一切都还好吗？</p><p>3.   Pretty good 非常好</p><p>4.   Let\'s see 拭目以待吧</p><p>5.   He passed out 他晕过去了</p><p>6.   Don\'t bother me 别玩我（熟人</p><p>7.   That\'s the point 那就是问题的关键</p><p>8.   I\'m bummed 我有点失望</p><p>9.   Take it away 把它拿走</p><p>10.   You\'ll be sorry 你会后悔的（熟人</p>', '2021-09-15 13:11:29', '2021-09-15 13:11:55');
INSERT INTO `notes` VALUES (4, 1, 1, '88个高效短语(4)', '<ol><li>It\'s over there 就在那边</li><li>Be my guest 请自便（做客）</li><li>That makes sense 有道理，我明白了</li><li>No wonder 难怪&nbsp;</li><li>It was sensational  那真是激动人心啊&nbsp;</li><li>I appreciate it 我不胜感激&nbsp;&nbsp;</li><li>Not a bit 没事，一点也不&nbsp;</li><li>Any different opinion? 有不同意见吗&nbsp;</li><li>Get over yourself 别自以为是（熟人）</li><li>&nbsp;It\'s freezing cold 天气很冷</li></ol>', '2021-09-15 13:12:56', '2021-09-15 13:14:04');
INSERT INTO `notes` VALUES (5, 1, 1, '88个高效短语(5)', '<p>41.Are you insane? 你疯了吗（熟人）</p><p>42. Fingers crossed 祝你好运</p><p>43. Come back quickly 快点回来</p><p>44. Will it help? 这有帮助吗？</p><p>45. Enjoy your lunch</p><p>46. Everything tastes great 都很好吃</p><p>47. It\'s too late 太晚了</p><p>48. How\'s your family? 家人怎么样</p><p>49. I like surfing 我喜欢冲浪</p><p>50. That sounds fantastic 听起来棒极了</p>', '2021-09-15 13:15:40', '2021-09-15 13:16:33');
INSERT INTO `notes` VALUES (6, 1, 1, '88个高效短语(6)', '<p>1. What a joke 简直是开玩笑</p><p>2.  He doesn\'t smoke 他不抽烟</p><p>3.  Tom passed away 汤姆去世了</p><p>4.  It\'s getting dark 天黑了</p><p>5. That\'s really funny 那太有趣了</p><p>6.  Is it serious? （这）严重吗？</p><p>7.  You are a genius 你真是个天才</p><p>8. Let\'s find out  我们一起做吧</p><p>9.  I freaked out 吓死我了，气死我了</p><p>10.  It\'s all true 这都是真的11.  She\'s so charming 他可真迷人</p>', '2021-09-15 13:18:02', '2021-09-15 13:18:26');
INSERT INTO `notes` VALUES (7, 1, 1, '88个高效短语(7)', '<p>71. Not that much 没有那么多&nbsp;</p><p>72. I screwed up 我搞砸了</p><p>73. What a coincidence！ 多么巧啊</p><p>74. That\'s all right 没关系</p><p>75. No such thing 没这回事</p><p>76. That\'s lit 太棒了，很赞</p><p>77. I am very tired 我很累</p><p>78. You\'ve got it 你已经知道了</p><p>79. Thank you anyway 还是要谢谢你</p><p>80. The sun shines 阳关普照</p><p>81. There it is 在那里，就是这样了</p><p>82. You are so smart 你真聪明</p><p>83. This will do 这样就可以</p><p>84. Things happen 这种事是难免的</p><p>85. no worries 没关系，别担心</p><p>86. Pull yourself together 冷静下来 振作起来</p><p>87. You astonish me 你让我很惊讶</p><p>88. You rock !!  你很棒</p><hr>', '2021-09-15 13:19:45', '2021-09-15 13:20:50');
INSERT INTO `notes` VALUES (8, 1, 2, '黑客与画家', '<p>如果别人告诉你应该相信什么，你就真的相信了，那么你就会和别人一样犯下同样的错误。如果你是南北战争前的南方庄园主，你会与北方开战；如果你是20世纪30年代的德国人，你会相信希特勒。</p><p>---</p><p>有时候，别人会对你说：“要根据社会需要，改造自己的思想（well-adjusted）。”这种说法隐含的意思似乎是，如果你不认同社会，那么肯定是你自己的问题。你同意这种说法吗？事实上，它不仅不对，而且会让历史倒退。如果你真的相信了它，凡是不认同社会之处，你连想都不敢想，马上就放弃自己的观点，那才会真正出问题。</p><p>---</p><p>人们都会说同样的话：“我们心态很开放，愿意接受新思想。”但是实际上，人们脑子里有一根界线，早就认准了什么是对的，什么是错的。［25］换言之，在他们看来，所有观点都是可以讨论的，除了那些错的观点。</p><p>---</p><p>团队越大，每个人的贡献就越接近于整体的平均值。所以，在不考虑其他因素的情况下，一个非常能干的人待在大公司里可能对他本人是一件很糟的事情，因为他的表现被其他不能干的人拖累了。</p>', '2021-09-22 18:27:18', '2021-09-22 18:30:23');
INSERT INTO `notes` VALUES (9, 1, 2, '黑客与画家', '<p>如果别人告诉你应该相信什么，你就真的相信了，那么你就会和别人一样犯下同样的错误。如果你是南北战争前的南方庄园主，你会与北方开战；如果你是20世纪30年代的德国人，你会相信希特勒。</p><p><br></p>', '2021-09-22 18:34:39', '2021-09-22 18:34:39');
INSERT INTO `notes` VALUES (10, 1, 2, '黑客与画家', '<p>有时候，别人会对你说：“要根据社会需要，改造自己的思想（well-adjusted）。”这种说法隐含的意思似乎是，如果你不认同社会，那么肯定是你自己的问题。你同意这种说法吗？事实上，它不仅不对，而且会让历史倒退。如果你真的相信了它，凡是不认同社会之处，你连想都不敢想，马上就放弃自己的观点，那才会真正出问题。</p><p><br></p>', '2021-09-22 18:34:39', '2021-09-22 18:34:39');
INSERT INTO `notes` VALUES (11, 1, 2, '黑客与画家', '<p>人们都会说同样的话：“我们心态很开放，愿意接受新思想。”但是实际上，人们脑子里有一根界线，早就认准了什么是对的，什么是错的。［25］换言之，在他们看来，所有观点都是可以讨论的，除了那些错的观点。</p><p><br></p>', '2021-09-22 18:34:39', '2021-09-22 18:34:39');
INSERT INTO `notes` VALUES (12, 1, 2, '黑客与画家', '<p>团队越大，每个人的贡献就越接近于整体的平均值。所以，在不考虑其他因素的情况下，一个非常能干的人待在大公司里可能对他本人是一件很糟的事情，因为他的表现被其他不能干的人拖累了。</p>', '2021-09-22 18:34:39', '2021-09-22 18:34:39');
INSERT INTO `notes` VALUES (13, 1, 2, '黑客与画家', '<p>如果别人告诉你应该相信什么，你就真的相信了，那么你就会和别人一样犯下同样的错误。如果你是南北战争前的南方庄园主，你会与北方开战；如果你是20世纪30年代的德国人，你会相信希特勒。</p><p><br></p>', '2021-09-23 19:27:42', '2021-09-23 19:27:42');
INSERT INTO `notes` VALUES (14, 1, 2, '黑客与画家', '<p>有时候，别人会对你说：“要根据社会需要，改造自己的思想（well-adjusted）。”这种说法隐含的意思似乎是，如果你不认同社会，那么肯定是你自己的问题。你同意这种说法吗？事实上，它不仅不对，而且会让历史倒退。如果你真的相信了它，凡是不认同社会之处，你连想都不敢想，马上就放弃自己的观点，那才会真正出问题。</p><p><br></p>', '2021-09-23 19:27:42', '2021-09-23 19:27:42');
INSERT INTO `notes` VALUES (15, 1, 2, '黑客与画家', '<p>人们都会说同样的话：“我们心态很开放，愿意接受新思想。”但是实际上，人们脑子里有一根界线，早就认准了什么是对的，什么是错的。［25］换言之，在他们看来，所有观点都是可以讨论的，除了那些错的观点。</p><p><br></p>', '2021-09-23 19:27:42', '2021-09-23 19:27:42');
INSERT INTO `notes` VALUES (16, 1, 2, '黑客与画家', '<p>团队越大，每个人的贡献就越接近于整体的平均值。所以，在不考虑其他因素的情况下，一个非常能干的人待在大公司里可能对他本人是一件很糟的事情，因为他的表现被其他不能干的人拖累了。</p>', '2021-09-23 19:27:42', '2021-09-23 19:27:42');
INSERT INTO `notes` VALUES (17, 1, 2, '王尔德', '结婚是想象战胜了理智,再婚是希望战胜了经验 ', '2021-09-23 19:29:44', '2021-09-23 19:29:44');
INSERT INTO `notes` VALUES (18, 1, 2, '王尔德语录', '一个人总是可以善待他毫不在乎的人', '2021-09-23 19:33:03', '2021-09-23 19:33:03');
INSERT INTO `notes` VALUES (19, 1, 1, '换零钱', '<p style=\"margin-left: 40px;\">第1个场景对话</p><p style=\"margin-left: 40px;\">A: Hi, Could you break this bill for me, please?</p><p style=\"margin-left: 40px;\">B: How do you want them?</p><p style=\"margin-left: 40px;\">A: Two 20’s and a 10, please</p><p style=\"margin-left: 40px;\">B: Here you are</p>', '2021-09-23 21:45:15', '2022-03-27 14:22:40');
INSERT INTO `notes` VALUES (21, 1, 1, '换零钱', '<p>第1个场景对话</p><p>A: Hi, Could you break this bill for me, please?</p><p>B: How do you want them?</p><p>A: Two 20’s and a 10, please</p><p>B: Here you are</p>', '2021-09-23 21:46:09', '2021-09-23 21:46:09');
INSERT INTO `notes` VALUES (22, 1, 1, '换零钱', '<p>第2个场景对话</p><p>A: Could you please break this 10 for me?</p><p>B: Sure. How would you like it?</p><p>A: If possible, I want one 5 and the rest in 1’s</p><p>B: I don’t have enough 1’s. Are quarters fine with you?</p><p>A: Oh, that’s even better</p><blockquote><p>&nbsp;换零钱的换 使用 break</p></blockquote>', '2021-09-23 21:46:37', '2021-09-23 21:46:37');
INSERT INTO `notes` VALUES (25, 1, 2, '反脆弱 11 --- 千万别嫁给摇滚明星', '<p>如果我不得不上班的话，我认为最可取的（痛苦也较少的）就是<b>高强度的工作一段非常短的时间</b>，然后什么都不做（假设什么都不做，就是真正意义上的什么都不做），直到我完全恢复定期再重来一次，而不是像日本人那样总是那种低强度、无休止、缺乏睡眠保证的，乏味的工作。</p>', '2022-03-27 14:11:05', '2022-03-27 14:11:05');
INSERT INTO `notes` VALUES (26, 1, 2, '反脆弱11 -千万别嫁给摇滚明星', '<p>意第绪谚语中就说: “做好最坏的打算，最好的情况总能水到渠成”。</p>', '2022-03-27 14:14:44', '2022-04-05 15:29:54');
INSERT INTO `notes` VALUES (27, 1, 1, '你尝试过吗?', '<p><b>第1个场景</b></p><p>A: Have you tried Chinese rice wine?</p><p>&nbsp;B: Just once.	</p><p>A: When did you try it for the first time?	</p><p>B: I tried it for the first time yesterday.	</p><p>A: How was it? Do you like it?	</p><p>B: I don’t quite remember. Actually, I’m still a bit drunk.</p>', '2022-03-27 14:25:12', '2022-03-27 14:25:50');
INSERT INTO `notes` VALUES (31, 1, 1, '你尝试过吗?', '<h3>第2个场景对话</h3><p>A: Have you tried cheese?<br>B: Just once.<br>A: When was the first time you tried it?<br>B: The first time I tried it was last year.<br>A: How was it? Do you like it?<br>B: That was also the last time I tried it.</p>', '2022-03-27 15:25:36', '2022-03-27 15:25:36');
INSERT INTO `notes` VALUES (32, 1, 2, '弗里德曼花论钱', '<p>弗里德曼花论钱四种模式：</p><p>&nbsp;一、花自己的钱给自己办事，即讲节约又讲效果－－如买菜讨价还价；</p><p>&nbsp;二、花自己的钱给别人办事，只讲节约不讲效果－－如看病人买礼物；</p><p>&nbsp;三、花别人的钱给自己办事，只讲效果不讲节约－－如公费医疗；</p><p>&nbsp;四、花别人的钱给别人办事，不讲节约也不讲效果－国有企业采购原料<br></p>', '2022-03-27 15:32:55', '2022-03-27 15:32:55');
INSERT INTO `notes` VALUES (33, 1, 2, '米兰·昆德拉语录', '<p>我们常常痛感生活的艰辛与沉重，无数次目睹了生命在各种重压下的扭曲与变形，“平凡”一时间成了人们最真切的渴望。 但是，我们却在不经意间遗漏了另外一种恐惧——没有期待、无需付出的平静，其实是在消耗生命的活力与精神。<br></p>', '2022-03-27 15:35:09', '2022-03-27 15:35:09');
INSERT INTO `notes` VALUES (34, 1, 2, '米兰·昆德拉语录', '<p style=\"\">愚蠢究竟是什么？理智可以除去阴险地隐藏在美丽谎言之下的恶的面具。但是面对愚蠢，理智是无力的。它没有任何面具可以除去。愚蠢并不戴面具。它就在那里，无辜的，真诚的，赤裸的。而且是无法定义的。---《帷幕》<br></p>', '2022-03-27 15:35:09', '2022-03-27 15:35:09');
INSERT INTO `notes` VALUES (36, 1, 2, '米兰·昆德拉语录', '<p>面对一个同类，人永远无法自由自在地当自己；一个人的力量，限制着另一个人的自由。面对一只动物，人就是自己。他的残酷是自由的。人与动物之间的关系构成了人类存在的一种永恒的深处背景，那是不会离弃人类存在的一面镜子（丑陋的镜子）。 ----《相遇》<br></p>', '2022-03-27 15:37:20', '2022-03-27 15:37:20');
INSERT INTO `notes` VALUES (37, 1, 2, '米兰·昆德拉语录', '<p>我们常常痛感生活的艰辛与沉重，无数次目睹了生命在各种重压下的扭曲与变形，“平凡”一时间成了人们最真切的渴望。 但是，我们却在不经意间遗漏了另外一种恐惧——没有期待、无需付出的平静，其实是在消耗生命的活力与精神。<br></p>', '2022-03-27 15:40:38', '2022-03-27 15:40:38');
INSERT INTO `notes` VALUES (38, 1, 2, '米兰·昆德拉语录', '<p>除了生病以外，你所感受到的痛苦，都是你的价值观带给你的，而非真实存在。人世间最大的悲哀就是——这不是我想要的生活，却是我自找的生活<br></p>', '2022-03-27 15:40:38', '2022-03-27 15:40:38');
INSERT INTO `notes` VALUES (39, 1, 2, '米兰·昆德拉语录', '<p>归根结底，年轻人如果装腔作势，不能算是他们的错，他们还没有定型，但生活把他们置于一个定型的世界之中，在这个世界里，人们要求他们像成熟的人一样行事。于是他们迫不及待地采用那些流行的方式和样子，这些东西容易对他们的胃口，是他们喜欢——他们在扮演角色 ——《玩笑》<br></p>', '2022-03-27 15:40:38', '2022-03-27 15:40:38');
INSERT INTO `notes` VALUES (40, 1, 2, '米兰·昆德拉语录', '<p>我们常常痛感生活的艰辛与沉重，无数次目睹了生命在各种重压下的扭曲与变形，“平凡”一时间成了人们最真切的渴望。 但是，我们却在不经意间遗漏了另外一种恐惧——没有期待、无需付出的平静，其实是在消耗生命的活力与精神。<br></p>', '2022-03-27 15:40:57', '2022-03-27 15:40:57');
INSERT INTO `notes` VALUES (41, 1, 2, '米兰·昆德拉语录', '<p>除了生病以外，你所感受到的痛苦，都是你的价值观带给你的，而非真实存在。人世间最大的悲哀就是——这不是我想要的生活，却是我自找的生活<br></p>', '2022-03-27 15:40:57', '2022-03-27 15:40:57');
INSERT INTO `notes` VALUES (42, 1, 2, '米兰·昆德拉语录', '<p>归根结底，年轻人如果装腔作势，不能算是他们的错，他们还没有定型，但生活把他们置于一个定型的世界之中，在这个世界里，人们要求他们像成熟的人一样行事。于是他们迫不及待地采用那些流行的方式和样子，这些东西容易对他们的胃口，是他们喜欢——他们在扮演角色 ——《玩笑》<br></p>', '2022-03-27 15:40:57', '2022-03-27 15:40:57');
INSERT INTO `notes` VALUES (43, 1, 2, '维特根斯坦', '<p>维特根斯坦是超级富二代，超级大哲学家，61岁去世，最后一句话说给他亲爱的妹妹：“不要悲伤，相信我，我度过了美好的一生。”我的意思是说，他的死亡境况是一种局面：一个人处在幸福的生活之中，然而他却不留恋这种当下的来自于世界的幸福。<br></p>', '2022-03-27 16:00:53', '2022-03-27 16:00:53');
INSERT INTO `notes` VALUES (44, 1, 2, '关于鲁迅', '<p>鲁迅是个独特的思想家，他对人的罪性的认识非常深刻，超出整个时代所有的华人作家、学者。然而，他的局限在于，他是一个无神论者，所以，你从他的文字只能读出恨与绝望。而同样承认人的罪性的基督徒们，因着接受基督为自己的救主，有爱，也有活泼的盼望。这就是无神论者与基督徒的根本不同。<br></p>', '2022-03-27 16:04:03', '2022-03-27 16:04:03');
INSERT INTO `notes` VALUES (45, 1, 3, '每个程序员都该知道的定律', '<p><b>琐碎定律（帕金森琐碎定律）</b><br></p><blockquote><p>“组织成员投入大量精力到琐碎的事情上。”<br></p></blockquote><p>这条定律论点是在<b>会议中花费的时间与事情的价值成反比</b>。的确是这样，人们更愿意把注意力和观点放在他们熟悉的事物上，而不是复杂的问题上。<br></p><p><br></p>', '2022-03-27 16:07:54', '2022-03-27 16:07:54');
INSERT INTO `notes` VALUES (46, 1, 3, '每个程序员都该知道的定律', '<p><b>Conway定律</b></p><p><i style=\"color: rgb(170, 135, 115);\">“系统设计的架构受限于生产设计，反映出公司组织的沟通架构”</i></p><p>在 60 年代，一位名叫 Melvin Conway 的工程师注意到公司组织结构影响到他们开发的系统的设计。他用一篇论文描述了这个观点，并命名为“Conway定律”。</p><p>&nbsp;这条定律很适用于软件开发领域，甚至体现到代码层面上。交付软件组件的各个团队组织结构直接影响到组件的设计。<br></p>', '2022-03-27 16:07:54', '2022-03-27 16:08:46');
INSERT INTO `notes` VALUES (47, 1, 2, '反脆弱 11 ---千万别嫁给摇滚明星', '<p>迈向反脆弱性的第一步就是<b>减少不利因素</b>，而不是增加有利因素。也就是说通过降低自己暴露于负面黑天鹅事件的概率，让反脆弱性，顺其自然的发挥作用。&nbsp;</p>', '2022-04-05 15:31:24', '2022-04-05 15:31:24');
INSERT INTO `notes` VALUES (48, 1, 2, '反脆弱 11 ---千万别嫁给摇滚明星', '<p></p><p>&nbsp;即使在工业革命的黄金年代，经济增长也是非常温和的，人均增长率不到1%，然而正是和缓的增长，将欧洲推上了主宰全球的巅峰。尽管增长率较低，但它却是稳扎稳打的强韧性增长。<br></p>', '2022-04-05 15:31:24', '2022-04-05 15:31:24');
INSERT INTO `notes` VALUES (49, 1, 2, '像哲学家一样生活：斯多葛哲学的生活艺术 (1-3)', '<p>根据塞涅卡的说法，斯多葛主义者要寻求发现的，“就是大脑如何才能始终持续在安稳、良好的进程中，能对自己宽和，能够乐观地看待眼下的状态<br></p>', '2022-04-05 15:38:37', '2022-04-05 15:38:37');
INSERT INTO `notes` VALUES (50, 1, 2, '像哲学家一样生活：斯多葛哲学的生活艺术 (1-3)', '<p>斯多葛主义要求我们经常反思我们的生活，而这些反思的时段总的来说是可以从日常的零碎时间中挤出来的，比如说当我们困在交通堵塞之中时，或者如塞涅卡建议的躺在床上等待睡意来临时。<br></p>', '2022-04-05 15:38:37', '2022-04-05 15:38:37');
INSERT INTO `notes` VALUES (51, 1, 2, '像哲学家一样生活：斯多葛哲学的生活艺术 (1-3)', '<p>斯多葛主义变得吸引人的原因之一，就是它摒弃了犬儒派的禁欲主义：斯多葛学派偏爱的生活方式虽然简单，却是接纳物质享受的。</p><p>斯多葛学派为了捍卫他们对禁欲主义的摒弃，争辩说，<b>如果他们像犬儒派一样避免这些“好事物”，那就证明了这些事物真的是好的</b>——是一些如果不从眼前藏起来他们就会渴望的事物。</p><p>无论碰到什么可以获得的“好事物”，斯多葛学派都会享受，但是即便这样做时，他们也准备着让自己放弃这些事物<br></p>', '2022-04-05 15:38:37', '2022-04-05 15:38:37');
INSERT INTO `notes` VALUES (52, 1, 2, '像哲学家一样生活：斯多葛哲学的生活艺术 (1-3)', '<p>斯多葛主义并不像犬儒主义，它并不要求支持者采用禁欲主义的生活方式。相反，斯多葛主义者认为，享受生活所能够提供的好处并没有什么错，只要我们在享受的方式上小心谨慎就行。特别是当客观环境发生变化时，我们就必须准备好放弃这些好处而不感到遗憾。<br></p>', '2022-04-05 15:38:37', '2022-04-05 15:38:37');
INSERT INTO `notes` VALUES (53, 1, 2, '像哲学家一样生活：斯多葛哲学的生活艺术(1-3)', '<p>&nbsp;马可有很好的理由在他的《沉思录》中做出这样的结论：“<span style=\"color: rgb(226, 139, 65);\">生活的艺术更像是摔跤而不像是跳舞。</span>”<br></p>', '2022-04-05 15:41:25', '2022-04-05 15:41:25');
INSERT INTO `notes` VALUES (54, 1, 2, '像哲学家一样生活：斯多葛哲学的生活艺术(1-3)', '<p>现代人很少看到采纳一种人生哲学的需要。相反，他们倾向于把日子用于努力工作，以便能够买得起最新潮的消费品。<b>他们坚定地相信，只要买够了东西，就能过一种既有意义又最令人满足的生活。</b>而且，即使这些人明白了购物之外生活还有更多内容，他们也不可能在对人生哲学的追求中转向斯多葛主义<br></p>', '2022-04-05 15:41:25', '2022-04-05 15:41:25');
INSERT INTO `notes` VALUES (55, 1, 2, '像哲学家一样生活：斯多葛哲学的生活艺术(1-3)', '<p>我期待大写S的“斯多葛主义者”（Stoics）会变成小写s的“<b>恬淡寡欲的人”（stoical</b>）——他们是一些情感上受到压抑的人。然而我发现，斯多葛主义者的目标，并不是要放弃生活中的情感，而是要放弃消极的情感。<br></p>', '2022-04-05 15:41:25', '2022-04-05 15:41:25');
INSERT INTO `notes` VALUES (56, 1, 2, '像哲学家一样生活：斯多葛哲学的生活艺术(1-3)', '<p>我发现斯多葛主义和禅宗有一定程度的相似。比如说，两者都强调对我们周围事物稍纵即逝之本性的思考，以及在可能的基础上掌控欲望的重要性。它们都建议我们追求安宁，并就如何获得和保持安宁提出了忠告<br></p>', '2022-04-05 15:41:25', '2022-04-05 15:41:25');
INSERT INTO `notes` VALUES (57, 1, 2, '房地产税', '<p>从房地产税就再次印证，不管是收什么税，从来就不存在什么阻力不阻力的，只存在收与不收，决定收了，就没有人再说什么该不该收了，都在讨论怎样收比较好。 所以接下来还可以考虑车子税和孩子税。别又说什么阻力了。<br></p>', '2022-04-05 15:44:02', '2022-04-05 15:44:02');

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets`  (
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  INDEX `password_resets_email_index`(`email`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of password_resets
-- ----------------------------
INSERT INTO `password_resets` VALUES ('jeristianokuang@gmail.com', '$2y$10$4CB1ijAqW0V.nEt0m4p5fergPNodjVGrXei4RJSddoJB71Bl9OcIG', '2021-10-29 17:37:46');

-- ----------------------------
-- Table structure for personal_access_tokens
-- ----------------------------
DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `personal_access_tokens_token_unique`(`token`) USING BTREE,
  INDEX `personal_access_tokens_tokenable_type_tokenable_id_index`(`tokenable_type`, `tokenable_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of personal_access_tokens
-- ----------------------------

-- ----------------------------
-- Table structure for sessions
-- ----------------------------
DROP TABLE IF EXISTS `sessions`;
CREATE TABLE `sessions`  (
  `id` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NULL DEFAULT NULL,
  `ip_address` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `user_agent` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `payload` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `sessions_user_id_index`(`user_id`) USING BTREE,
  INDEX `sessions_last_activity_index`(`last_activity`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of sessions
-- ----------------------------

-- ----------------------------
-- Table structure for subscriptions
-- ----------------------------
DROP TABLE IF EXISTS `subscriptions`;
CREATE TABLE `subscriptions`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `hours` int(11) NOT NULL DEFAULT 0,
  `minutes` int(11) NOT NULL DEFAULT 0,
  `tag_ids` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0' COMMENT '推送的标签id',
  `pushed_time` int(11) NOT NULL DEFAULT 0 COMMENT '任务执行日期',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 10 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of subscriptions
-- ----------------------------
INSERT INTO `subscriptions` VALUES (3, 1, 12, 0, '1,2,3', 0, '2021-09-18 08:42:31', '2022-04-05 15:26:40');
INSERT INTO `subscriptions` VALUES (9, 1, 18, 0, '1,2,3', 0, '2022-04-05 15:09:18', '2022-04-05 15:26:41');

-- ----------------------------
-- Table structure for tags
-- ----------------------------
DROP TABLE IF EXISTS `tags`;
CREATE TABLE `tags`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(80) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tags
-- ----------------------------
INSERT INTO `tags` VALUES (1, 'L2B', 1, '2021-09-15 11:55:28', '2021-09-15 11:55:28');
INSERT INTO `tags` VALUES (2, '语录', 1, '2021-09-15 11:55:39', '2021-09-15 11:55:39');
INSERT INTO `tags` VALUES (3, '编程', 1, '2022-03-27 14:05:05', '2022-03-27 14:05:05');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `two_factor_recovery_codes` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'Jeristiano', 'jeristianokuang@gmail.com', NULL, '$2y$10$WwYmkm1G0UvsK9L2icsWdOPrkjlEHdRJnbYIYIQJ8OJnWLKaS/0NO', NULL, NULL, 'QaW5c6NBroFWHPI62gczzUxMlK3I1kEqDpPdf1MTIPPkRHJT0OWBYV98j8XM', '2021-09-15 11:54:50', '2021-09-15 11:54:50');

SET FOREIGN_KEY_CHECKS = 1;
