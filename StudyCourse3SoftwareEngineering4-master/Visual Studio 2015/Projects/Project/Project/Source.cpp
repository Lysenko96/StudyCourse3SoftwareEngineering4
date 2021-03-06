#include <glut.h>
#include <cmath>
#include <stdlib.h>

float WinWid = 400.0;
float WinHei = 400.0;
float Angel = 0.0, Scale=1.0;
void Draw()
{
	glClear(GL_COLOR_BUFFER_BIT);
	//glColor3f(0.3, 0.5, 0.3);
	glPushMatrix();
	Scale = 1.0 - abs(sin(3.14*Angel / 90.0) / sqrt(3.0) / 2);
	glRotatef(Angel, 0.0, 0.0, 1.0);
	glScalef(Scale, Scale, 1.0);
	glBegin(GL_LINES);
	for (float i = -WinWid / 2; i <= WinWid / 2; i += 1.0)
	{
		glVertex2f(i, -WinHei/2);
		glVertex2f(i, WinHei/2);
	}
	for (float i = -WinHei / 2; i <= WinHei / 2; i += 1.0)
	{
		glVertex2f(-WinWid / 2,i);
		glVertex2f(WinWid / 2, i);
	}
	glEnd();
	glPopMatrix();
	glutSwapBuffers();
	
}

void Initialization()
{
	glClearColor(0.0, 0.0, 0.0, 1.0);
	glMatrixMode(GL_PROJECTION);
	glLoadIdentity();
	glOrtho(-WinWid/2, WinWid/2, -WinHei/2, WinHei/2, -200.0, 200.0);
	glMatrixMode(GL_MODELVIEW);
	//glTranslatef(50.0, -50.0, 0.0);
	//glScalef(0.9, 0.9, 1.0);
	//glRotatef(15, 2.0, 0.0, -1.0);
}

void Timer2(int)
{
	glColor3f(0.0, 1.0, 0.0);
	glutPostRedisplay();
	glutTimerFunc(1000, Timer2, 0);
}
void Timer(int value)
{
	switch (value)
	{
	case 0: glColor3f(1.0, 1.0, 1.0);
		break;
	case 1: glColor3f(0.5, 0.0, 0.0);
		break;
	case 2: glColor3f(0.0, 0.5, 0.0);
		break;
	case 3: glColor3f(0.0, 0.0, 0.5);

	}
	++Angel;
	//glRotatef(1, 0.0, 0.0, 1.0);

	//Draw();
	glutPostRedisplay();
	glutTimerFunc(50, Timer, rand() % 4);
}

int main(int argc, char** argv)
{
	// �������������
	glutInit(&argc, argv);
	glutInitDisplayMode(GLUT_DOUBLE | GLUT_RGB);
	glutInitWindowSize(WinWid, WinHei);
	glutInitWindowPosition(100, 200);
	glutCreateWindow("TestWindow");
	// �����������
	glutDisplayFunc(Draw); // ���������
	glutTimerFunc(50, Timer, 0);
	//glutTimerFunc(1000, Timer2, 0);
	Initialization();
	glutMainLoop();
	return 0;
}