
package com.aop;

import com.domain.Authority;
import org.apache.log4j.Logger;
import org.aspectj.lang.JoinPoint;
import org.aspectj.lang.annotation.*;
import org.aspectj.lang.reflect.MethodSignature;
import org.springframework.security.core.Authentication;
import org.springframework.security.core.context.SecurityContext;
import org.springframework.security.core.context.SecurityContextHolder;
import org.springframework.security.core.userdetails.User;
import org.springframework.stereotype.Component;

@Aspect
@Component
public class LoggingAspect {

    private static final Logger logger = Logger.getLogger(LoggingAspect.class);



    @Before("execution(public * com.service.GoalService.getAll())")
    public void all() {
        logger.info("Executing @Before advice on Goal service in Get all method of this service package()");
    }
    @After("execution(* com.controller.AdminController.*(..))")
    public void AdLog(JoinPoint point) {
        logger.info(point.getSignature().getName() + " called...");
    }
    @After("execution(* com.controller.userController.*(..))")
    public void UserLog(JoinPoint point) {
        logger.info(point.getSignature().getName() + " called...");
    }
    @After("execution(* com.service.BlogServices.*(..))")
    public void BlogServiceLog(JoinPoint point) {
        logger.info(point.getSignature().getName() + "is called in BlogServices service Layer...");
    }

    @After("execution(* com.service.GoalService.*(..))")
    public void GoalServiceLog(JoinPoint point) {
        logger.info(point.getSignature().getName() + " is called in GoalService service Layer...");
    }
    @After("execution(* com.repository.GoalRepo.*(..))")
    public void GoalRepoLog(JoinPoint point) {
        logger.info(point.getSignature().getName() + " is called in GoalRepo Repository Layer...");
    }
    @Before("execution(public * com.repository.GoalRepo.get())")
    public void GoalRepoGetCalled() {
        logger.info("Executing @Before advice on Goal Repository get methode");
    }


}

