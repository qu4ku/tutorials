#include <stdio.h>

static char display_message[] = "Current val";

int
do_the_thing(void) {
	int i = 0;

	int b = 0;

	for(i = 0; i < 45;) {
		if((i % 2) == 1) {
			i = i + 1;
			printf("%s (odd): %d\n", display_message, i - 1);
			b = b ^ i;
		} else {
			printf("%s (even): %d\n", display_message, i);
			i = i + 1;
			b = (b + i) & 0xff;
		}
	}

	printf("This is the end\n");
	return 0;
}

int
main(int argc, char **argv) {
	printf("Beginning the program\n");

	return do_the_thing();
}