package com.controller;

import com.domain.Goal;
import com.service.BlogServices;
import com.service.GoalService;
import org.springframework.http.ResponseEntity;
import org.springframework.web.bind.annotation.*;

import javax.validation.Valid;
import java.util.List;


@RestController
@RequestMapping("/user")
public class userController {
    private GoalService goalService;



    public  userController(GoalService goalService){

        this.goalService = goalService;

    }

    @PostMapping(path = "/goal")
    public void addGoal(@Valid @RequestBody Goal goal) {

        goalService.insert(goal);
    }


    @GetMapping("/goal/{id}")
    public Goal getGoal(@PathVariable int id){
        Goal goal = goalService.get(id);
        return goal;
    }
    @GetMapping("/Goals")
    public ResponseEntity<List<Goal>> getAllGoals() {
        List<Goal> goals = goalService.getAll();
        return ResponseEntity.ok().body(goals);
    }
    @GetMapping("/goals/{id}")
    public boolean deleteGoals(@PathVariable int id){
        goalService.delete(id);
        return true;
    }
}
