CREATE DATABASE g04;

use g04;

CREATE TABLE Category (
c_id INT AUTO_INCREMENT PRIMARY KEY,
c_jp varchar(20)  NOT NULL,
description_m varchar(500)  NOT NULL,
description_r varchar(500)  NOT NULL,
img varchar(200)  NOT NULL,
b_id INT NOT NULL
);


INSERT INTO category ( c_id, c_jp, img, description_m, description_r, b_id)VALUES(1,"�e���g","img/tent02.png","�L�����v�Ƃ����΁A��͂�e���g�𒣂��Ď��R���ԋ߂Ɋ����Ȃ���s���L�����v���������Ƃ����l�������͂��B2�l����̋�Ԃ����o���ׂɁA�ǂ̂悤�ȃe���g��I�񂾂�ǂ����̃q���g�́A2�`3�l�p���炢�̍L����I�Ԃ��ƁB�G�߂ɑΉ��������̂ŁA���S�҂ł��݉c���₷���^�C�v�B���i�т�2�`3���~���x�̃x�[�V�b�N�ȕ�����n�߂Ă݂�̂��I�X�X���B","2�l����̋�Ԃ��������y���ވׂɁA������̐l�C�e���g�����L���O���Q�l�ɂ��Ă݂Ă͂������ł��傤���B", 1);


INSERT INTO category ( c_id, c_jp, img, description_m, description_r, b_id)VALUES(2,"�Q��","img/sleepingbag02.png","�L�����v�̉��K�������߂�v���Ƃ��āA�����Ƃ��傫���̂��Q�S�n�ł��B�V�����t�i�Q�܁j�́A���[�Y�i�u���ȕ��������̂ŁA�����Ă��܂��Ă����ł��傤�B
�I�ԃ|�C���g�́A�V�����t�̉��K���x�B�^�Ă݂̂̎g�p�ł���΁A����̂��̂ł��܂��܂���B2�l�p�̐Q�܂�����̂ŁA�J�b�v���ɂ͂�������I�X�X���B
","2�l����̊Â����Ԃ��߂����ׂɁA������̐l�C�Q�܃����L���O���Q�l�ɂ��Ă݂Ă͂������ł��傤���B", 2);


INSERT INTO category ( c_id, c_jp, img, description_m, description_r, b_id)VALUES(3,"�e�[�u��&�`�F�A�[","img/table01.png","�A�E�g�h�A�ł̂��났�ɂ͂��Ѓ`�F�A���e�[�u�����B���ʂ̍��������S�n���l���ď��i���w������Ƃ悢�ł��傤�B���y�ʂȂ��̂ł���Η��֐��������A�T�C�h�e�[�u���Ƃ��Ă����􂵂܂��B�L�����v�����łȂ��A�Ԃɏ�����Ă�������s�N�j�b�N������Ɏ����o������Ɨp�r���L����܂��ˁB","2�l�ŐH���₭�났�̎��Ԃ��߂����ׂɁA������̐l�C�Q�܃����L���O���Q�l�ɂ��Ă݂Ă͂������ł��傤���B", 3);


INSERT INTO category ( c_id, c_jp, img, description_m, description_r, b_id)VALUES(4,"�����v","img/lamp01.png","�O���������Ă���L�����v��ł��A��Ԃ͈Â��Ȃ�P�[�X���قƂ�ǁB���Ƀe���g���ł́A�茳�̓���͕K�{�ƂȂ�܂��B���^�̉����d����A�w�b�h���C�g��p�ӂ���̂������ł����A�������߂������̂��A�g������̂���LED�����^���B���r���O�X�y�[�X�̓���Ƃ��Ă��[���Ȗ��邳������A���邳�𒲐��ł���^�C�v�������ĕ֗��ł��B
","2�l����̖���Ƃ炵�o�����ԂɁA������̃����v�����L���O���Q�l�ɂ��Ă݂Ă͂������ł��傤���B", 4);


INSERT INTO category ( c_id, c_jp, img, description_m, description_r, b_id)VALUES(5,"�L�b�`���O�b�Y�Z�b�g","img/tool01.png","�J�b�v���ňꏏ�ɃL�����v��Ŏ藿�����y���ނ̂ł���΁A�L�b�`���O�b�Y�͕K�{�ł��ˁB
�������̓Z�b�g�A�C�e�����_���ځB�\�ł���΃X�^�b�L���O�i�d�˂Ď��[�j�ł��钲���Z�b�g��1��ɓ����ƕ֗��ł��B���ɂ́A�􂢕���������l�b�g��A���M�₨���Ȃǂ֗̕��ȃZ�b�g�A�C�e���Ȃǂ��p�ӂł���Ɖ��K�ł��ˁB
","2�l�ňꏏ�Ɏ藿�����Ԃ��y���ވׂɁA������̃L�b�`���O�b�Y�����L���O���Q�l�ɂ��Ă݂Ă͂������ł��傤���B", 5);
